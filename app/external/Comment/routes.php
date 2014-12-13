<?php
Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(
		array('path' => '/comment', 'alias' => 'commentList', 'action' => 'App\External\Comment\Controllers\CommentController@index'),
		array('path' => '/comment/{id}', 'alias' => 'commentShow', 'action' => 'App\External\Comment\Controllers\CommentController@show')
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
} );

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'comment', 'App\External\Comment\Controllers\Admin\CommentController' );
	} );
} );