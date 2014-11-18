<?php
Route::group(array('domain' => 'shop.web.com'), function () {
	Route::get('/', array('as' => 'shop', 'use' => function(){
		return 'Shop';
	}));
	Route::group(array("before" => "guest"), function () {

	});
});