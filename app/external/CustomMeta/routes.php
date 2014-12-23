<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/23
 * Time: 15:21
 */

Route::group(array('domain' => 'member.web.com'), function () {
	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(
			array('path' => '/custommeta', 'alias' => 'custommeta', 'action' => 'App\External\CustomMeta\Controllers\CustomMetaController@show', 'method' => 'any')
		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
	});
});