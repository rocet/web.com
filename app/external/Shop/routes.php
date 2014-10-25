<?php

Route::group(array("before" => "guest"), function () {
	Route::get('/shop', array('as' => 'shopindex', 'use' => function(){
		return 'Shop';
	}));
});