<?php

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
        Route::get( '/', array( 'as' => 'admin', 'use' => function(){
            return View::make('Admin::admin' );
        } ) );
		Route::resource( 'group', 'App\Modules\Admin\Controllers\GroupController' );
		Route::resource( 'orgnaze', 'App\Modules\Admin\Controllers\OrgnazeController' );
		Route::resource( 'region', 'App\Modules\Admin\Controllers\RegionController' );
		Route::resource( 'user', 'App\Modules\Admin\Controllers\UserController' );
		Route::resource( 'resource', 'App\Modules\Admin\Controllers\ResourceController' );
	} );
} );