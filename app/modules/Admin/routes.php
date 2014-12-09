<?php

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
        Route::get( '/', array( 'as' => 'admin', 'use' => function(){
	         return View::make('Admin::admin' );
        } ) );
		Route::resource( 'menu', 'App\Modules\Admin\Controllers\MenuController' );
        Route::resource( 'rule', 'App\Modules\Admin\Controllers\RuleController' );
        Route::resource( 'group.rule', 'App\Modules\Admin\Controllers\RuleController' );
		Route::resource( 'group', 'App\Modules\Admin\Controllers\GroupController' );
		Route::resource( 'organization', 'App\Modules\Admin\Controllers\OrganizationController' );
        Route::resource( 'organization.user', 'App\Modules\Admin\Controllers\UserController' );
		Route::resource( 'region', 'App\Modules\Admin\Controllers\RegionController' );
		Route::resource( 'user', 'App\Modules\Admin\Controllers\UserController' );
		Route::resource( 'resource', 'App\Modules\Admin\Controllers\ResourceController' );
        Route::resource( 'component', 'App\Modules\Admin\Controllers\ComponentController' );
		Route::resource( 'group.user', 'App\Modules\Admin\Controllers\UserController' );
        Route::resource( 'group.resource', 'App\Modules\Admin\Controllers\ResourceController' );
        Route::resource( 'organization.user.group.resource', 'App\Modules\Admin\Controllers\ResourceController' );
	} );
} );