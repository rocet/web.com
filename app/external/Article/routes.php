<?php
Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(
		array('path' => '/article', 'alias' => 'articleList', 'action' => 'App\External\Article\Controllers\ArticleController@index'),
		array('path' => '/article/{id}', 'alias' => 'articleShow', 'action' => 'App\External\Article\Controllers\ArticleController@show')
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
});

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'article', 'App\External\Article\Controllers\Admin\ArticleController' );
        Route::resource( 'category', 'App\External\Article\Controllers\Admin\CategoryController' );
        Route::resource( 'media', 'App\External\Article\Controllers\Admin\CategoryController' );
	} );
} );