<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/24
 * Time: 12:03
 */

Form::macro('treeSelect', function($name, $data = array(), $value = 0, $attr = array(), $model = array())
{
	$ret = '';
	if( !empty($model) ){
		$modelObj = new $model['model'];
		if( $value ){
			$ancestors = $modelObj->find( $value )->getAncestorsAndSelf();
			$end = $ancestors->count() - 1;
			foreach($ancestors as $k => $lvlRoot){
				$ret .= Form::select( $k == $end ? $name : null, $data + $modelObj->selections($model['field'], $lvlRoot->{$lvlRoot->getParentColumn()} ?: 'root' ), $lvlRoot->id, $attr);
			}
		} else {
			$ret = Form::select($name, $data + $modelObj->selections($model['field']), $value, $attr);
		}
	} else {
		$ret = Form::select($name, $data, $value, $attr);
	}
	return $ret;
});

Form::macro('regionSelect', function($name, $data = array(), $value = '', $attr = array(), $model = '')
{
	$ret = '';
	$ancestors = array(0, 110000, 110100);
	foreach($ancestors as $k => $lvlRoot){
		$ret .= Form::select( $k == 2 ? $name : null, $data + Region::selections('region_name', $lvlRoot), $value ? $value : $lvlRoot, array( 'class' => 'region', 'onchange' => 'region(this);' ));
	}
	return $ret;
});