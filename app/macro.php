<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/24
 * Time: 12:03
 */
Blade::extend(function($value) {
	return preg_replace('/\{\?(.+)\?\}/', '<?php ${1}; ?>', $value);
});


Form::macro( 'treeSelect', function ( $name, $data = array(), $value = 0, $attr = array(), $model = array() ) {
	$ret = '';
	if ( ! empty( $model ) ) {
		$modelObj = new $model['model'];
		if ( $value ) {
			$current      = $modelObj->find( $value );
			$parentColumn = $modelObj->getParentColumn();
			$ancestors    = $current->getAncestorsAndSelf( array( 'id', $parentColumn ) );

//			$parentRoots = array();
//			foreach ( $ancestors as $k => $lvlRoot ) {
//				$parentRoots[] = $lvlRoot->{$lvlRoot->getParentColumn()};
//			}
//          // where pid in (null) ???
//			echo '<pre>';
//			var_dump($parentRoots, $modelObj::whereIn($lvlRoot->getParentColumn(), $parentRoots)->select($model['field'], $modelObj->getParentColumn(), 'id')->get()->toArray() );
//			echo '</pre>';

			$end = $ancestors->count() - 1;
			foreach ( $ancestors as $k => $lvlRoot ) {
				$ret .= Form::select( $k == $end ? $name : null, $data + $modelObj->selections( $model['field'], $lvlRoot->{$lvlRoot->getParentColumn()} ?: 'root' ), $lvlRoot->id, $attr );
			}

		} else {
			$ret = Form::select( $name, $data + $modelObj->selections( $model['field'] ), $value, $attr );
		}
	} else {
		$ret = Form::select( $name, $data, $value, $attr );
	}

	return $ret;
} );

Form::macro( 'regionSelect', function ( $name, $data = array(), $value = '', $attr = array() ) {
	$ret = '';
	if ( ! $value ) {
		$ret .= Form::select( $name, $data + Region::selections( 'region_name', 0 ), 0, $attr );
	} else {
		$province = substr( $value, 0, 2 );
		$city     = substr( $value, 2, 2 ) > 0 ? substr( $value, 2, 2 ) : '01';
		$town     = substr( $value, 4, 2 ) > 0 ? substr( $value, 4, 2 ) : '01';
		$town     = $province . $city . $town;
		$city     = $province . $city . '00';
		$province = $province . '0000';


//		$ancestors = $value ? array(
//			array( 0, $province ),
//			array( $province, $city ),
//			array( $city, $town )
//		) : array( array( 0, 0 ), array( 110000, 110000 ), array( 110100, 110100 ) );
		$ancestors = array(
			array( 0, $province ),
			array( $province, $city ),
			array( $city, $town )
		);

		// var_dump( Region::whereIn('pid', array(0,110000,110100))->select('region_name', 'pid', 'id')->get()->toArray() );
		foreach ( $ancestors as $k => $lvlRoot ) {
			$ret .= Form::select( $k == 2 ? $name : null, $data + Region::selections( 'region_name', $lvlRoot[0] ), $lvlRoot[1], $attr );
		}
	}

	return $ret;
} );

Form::macro('editor', function($name = '', $value = '', $attr = array(), $relates = array()){
	return \App::make('App\External\Media\Controllers\MediaController')->show($name, $value, $attr, $relates);
});

Form::macro('mediaSelect', function($name = '', $value = '', $attr = array(), $relates = array()){
	$ret = Form::hidden( $name, $value, $attr );
	$ret .= '<img id="'.$name.'image" data-src="holder.js/140x140" src="'.$value.'" style="width:140px;height:140px;" class="img-rounded">';
	$ret .= '<script id="'.$name.'editor" style="display:none;"></script><script>dumpScripts.s'.time().' = function(){jQuery(function($){attachment.init("'.$name.'editor","'.$name.'","beforeInsertImage", '.json_encode($relates).');attachment.show("'.$name.'image","insertimage");});}</script>';
	return $ret;
});

Form::macro('ruleSelect', function($name, $data = array(), $value = '', $attr = array()){
	$ret = '';
	$res = DB::table('resource')->select('target', 'resource_name', 'pid', 'id')->get();
	$resources = array();
	foreach ($res as $resource){
		$resources[$resource->id] = (array) $resource;
		$resources[$resource->id]['pid'] = $resources[$resource->id]['pid'] ?: 0;
	}
	foreach ($resources as $resource)
		$resources[$resource['pid']]['son'][$resource['id']] = &$resources[$resource['id']];
	$resources = isset($resources[0]['son']) ? $resources[0]['son'] : array();

	foreach($resources as $resource){
		if(isset($resource['son'])){
			$ret .= Form::label($resource['target'], $resource['resource_name'], array('class'=>'selectMultiple') );
			$ret .= Form::select(null, $data + array_combine( array_pluck($resource['son'], 'id'), array_pluck($resource['son'], 'resource_name')), '', array('id'=>$resource['target']) + $attr );
		}
	}
	$ret .= '<div class="ruleCheckBoxPanel"></div>';
	$ret .= Form::hidden($name, $value ?: '[]', $attr);
	return $ret;
});

HTML::macro( 'tree', function () {
	return '<div class="tree" data-init=""></div>';
} );

HTML::macro( 'filter', function ( $field, $model, $conf ) {
	if ( new $conf['model'] instanceof Tree ) {
		$ancestorFunc = $field == call_user_func( array(
			new $conf['model'],
			'getParentColumn'
		) ) ? 'getAncestors' : 'getAncestorsAndSelf';
		$relModel = strtolower( $conf['model'] );
		return implode( '-', get_class( $model ) == $conf['model'] ? $model->$ancestorFunc()->lists( $conf['field'] ) : $model->$relModel->$ancestorFunc()->lists( $conf['field'] ) );
	} else {
		return $model->$conf['relate']->$conf['field'];
	}


//
//	        header('Content-Type:text/html;charset=utf-8');
//	        echo '<pre>';
//	        print_r( App::make('App\Modules\Data\Controllers\OrganizationController')->gridData( Config::get('Admin::view/organization') )->toArray() );
//	        print_r( DB::table('organization')
//	          ->join('organization AS '.DB::getTablePrefix().'parent', 'organization.pid', '=', 'parent.id')
//	          ->join('region', 'organization.region_id', '=', 'region.id')
//	          ->join('user', 'organization.user_id', '=', 'user.id')
//	          ->where('organization.pid','=', 1)
//	          ->orderBy('organization.id','desc')
//	          ->select('organization.*','parent.organization_name AS parent_name','region.region_name','user.user_name')
//	          ->paginate()->toArray()
//            );
//	        echo '</pre>';

//	$isParent = method_exists($model, 'getParentColumn') && $field == $model->getParentColumn();
//	return $isParent ? $model->parent_name : $model->$conf['field'];

} );