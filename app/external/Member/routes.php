<?php
Route::group(array('domain' => 'member.web.com'), function () {
	$default_agree = array(
		array('path' => '/', 'alias' => 'member', 'action' => 'App\External\Member\Controllers\UserController@index'),
		array('path' => '/user/{id}', 'alias' => 'user.show', 'action' => 'App\External\Member\Controllers\UserController@show'),
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}

	Route::group(array("before" => "guest"), function () {

	});

	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(

		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
	});
});