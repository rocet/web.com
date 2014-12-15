<?php
Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(
		array('path' => '/category/{id}/article', 'alias' => 'category.article', 'action' => 'App\External\Article\Controllers\ArticleController@index'),
		array('path' => '/article/{id}', 'alias' => 'article.show', 'action' => 'App\External\Article\Controllers\ArticleController@show'),

		array('path' => '/article/{id}/comment', 'alias' => 'article.comment', 'action' => 'App\External\Comment\Controllers\CommentController@index'),
		array('path' => '/article/{id}/comment/store', 'alias' => 'article.comment.create', 'action' => 'App\External\Comment\Controllers\CommentController@store', 'method'=>'post')
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
} );

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'article', 'App\External\Article\Controllers\Admin\ArticleController' );
        Route::resource( 'component.category', 'App\External\Article\Controllers\Admin\CategoryController' );
        Route::resource( 'component.category.article', 'App\External\Article\Controllers\Admin\ArticleController' );
		Route::resource( 'component.media', 'App\External\Article\Controllers\Admin\MediaController' );
		Route::resource( 'article.media', 'App\External\Article\Controllers\Admin\MediaController' );
		Route::resource( 'component.category.article.media', 'App\External\Article\Controllers\Admin\MediaController' );
		Route::resource( 'component.comment', 'App\External\Article\Controllers\Admin\CommentController' );
		Route::resource( 'article.comment', 'App\External\Article\Controllers\Admin\CommentController' );
		Route::resource( 'component.category.article.comment', 'App\External\Article\Controllers\Admin\CommentController' );
	} );
} );