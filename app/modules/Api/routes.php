<?php

Route::group(array('domain' => 'api.web.com'), function(){
	Route::get('/', 'App\Modules\Api\Controllers\HomeApiController@showWelcome');
});