<?php
Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(
		array('path' => '/articles', 'alias' => 'articles', 'action' => function(){
			return View::make('Article::Articles')->with(array(
				'item' => Article::with('user','category','comments', 'medias')->get()
			));
		}),

		array('path' => '/category/{id}/articles', 'alias' => 'category.articles', 'action' => 'App\External\Article\Controllers\ArticleController@index'),
		array('path' => '/article/{id}', 'alias' => 'article.show', 'action' => 'App\External\Article\Controllers\ArticleController@show'),

		array('path' => '/article/{id}/comments', 'alias' => 'article.comments', 'action' => 'App\External\Comment\Controllers\CommentController@index'),
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}


	Route::group(array("before" => "guest"), function () {

	});

	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(
			array('path' => '/article/{id}/comment/store', 'alias' => 'article.comment.store', 'action' => 'App\External\Comment\Controllers\CommentController@store', 'method'=>'post'),
			array('path' => '/article/{id}/media/store', 'alias' => 'article.media.store', 'action' => 'App\External\Media\Controllers\MediaController@store', 'method'=>'post'),
		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
	});
} );

Route::group(array('domain' => 'member.web.com'), function () {
	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(

		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
		Route::resource( 'user.articles', 'App\External\Article\Controllers\Member\ArticleController' );
		Route::resource( 'user.categorys.articles', 'App\External\Article\Controllers\Member\ArticleController' );
	});
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