<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/24
 * Time: 12:03
 */

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

HTML::macro( 'tree', function () {
	return '<div class="tree" data-init=""></div>';
} );

HTML::macro( 'filter', function ( $field, $model, $conf ) {
	$relModel = strtolower( $conf['model'] );
	if ( new $relModel instanceof Tree ) {
		$ancestorFunc = $field == call_user_func( array(
			new $relModel,
			'getParentColumn'
		) ) ? 'getAncestors' : 'getAncestorsAndSelf';

		return implode( '-', get_class( $model ) == $conf['model'] ? $model->$ancestorFunc()->lists( $conf['field'] ) : $model->$relModel->$ancestorFunc()->lists( $conf['field'] ) );
	} else {
		return get_class( $model ) == $conf['model'] ? $model->parent()->pluck( $conf['field'] ) : $model->$relModel->$conf['field'];
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