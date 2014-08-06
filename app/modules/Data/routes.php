<?php

Route::group(array('domain' => 'data.web.com'), function(){
	Route::get('user/enums', 'App\Modules\Data\Controllers\UserController@enums');
	Route::resource('user', 'App\Modules\Data\Controllers\UserController');
});