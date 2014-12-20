<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/20
 * Time: 9:49
 */


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