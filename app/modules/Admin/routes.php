<?php

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::get( '/', array( 'as' => 'admin', 'use' => function(){
		return 'Admin';
	} ) );
	Route::group( array( "before" => "auth" ), function () {
		Route::resource( 'groups', 'App\Modules\Admin\Controllers\GroupController' );
		Route::resource( 'orgnazes', 'App\Modules\Admin\Controllers\OrgnazeController' );
		Route::resource( 'regions', 'App\Modules\Admin\Controllers\RegionController' );
	} );
} );