<?php
Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(

    );
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
});

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'media', 'App\External\Media\Controllers\Admin\MediaController' );

    } );
} );