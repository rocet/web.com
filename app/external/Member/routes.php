<?php
Route::group(array('domain' => 'member.web.com'), function () {
	Route::get('/', array('as' => 'member', 'use' => function(){
		return 'Member';
	}));
	Route::group(array("before" => "guest"), function () {

	});
});