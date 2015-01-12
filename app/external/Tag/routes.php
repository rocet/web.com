<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:25
 */

Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(

	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
} );

Route::group(array('domain' => 'member.web.com'), function () {
	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(

		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
		Route::resource( 'user.tags', 'App\External\Tag\Controllers\Member\TagController' );
	});
} );

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'tag', 'App\External\Tag\Controllers\Admin\TagController' );
	} );
} );