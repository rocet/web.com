<?php

Route::group(array('domain' => 'api.web.com'), function(){
	Route::get('/', 'App\Modules\Api\Controllers\CommonController@showWelcome');
	Route::post('/registe/validate', 'App\Modules\Api\Controllers\UserController@validateError');
	Route::post('/registe', 'App\Modules\Api\Controllers\UserController@register');
	Route::post('/login', 'App\Modules\Api\Controllers\UserController@formLogin');
	
	// Route::get('/region/{pid?}', 'App\Modules\Api\Controllers\CommonController@regions')->where('pid', '[0-9]+');
	// Route::get('/users/{page?}', 'App\Modules\Api\Controllers\UserController@paginate')->where('page', '[0-9]+');
	// Route::get('/user/{id?}', 'App\Modules\Api\Controllers\UserController@getOne')->where('id', '[0-9]+');

	$resources = array('user','resource','group','orgnaze','region');
	foreach ($resources as $resource) {
		Route::resource($resource, 'App\Modules\Api\Controllers\\'.ucfirst($resource).'Controller');
	}
});