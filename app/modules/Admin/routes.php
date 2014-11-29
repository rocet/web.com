<?php

Route::group( array( 'domain' => 'admin.web.com' ), function () {
	Route::group( array( "before" => "auth" ), function () {
        Route::get( '/', array( 'as' => 'admin', 'use' => function(){
	         return View::make('Admin::admin' );


//
//	        header('Content-Type:text/html;charset=utf-8');
//	        echo '<pre>';
//	        print_r( App::make('App\Modules\Data\Controllers\OrgnazeController')->gridData( Config::get('Admin::view/orgnaze') )->toArray() );
//	        print_r( DB::table('orgnaze')
//	          ->join('orgnaze AS '.DB::getTablePrefix().'parent', 'orgnaze.pid', '=', 'parent.id')
//	          ->join('region', 'orgnaze.region_id', '=', 'region.id')
//	          ->join('user', 'orgnaze.user_id', '=', 'user.id')
//	          ->where('orgnaze.pid','=', 1)
//	          ->orderBy('orgnaze.id','desc')
//	          ->select('orgnaze.*','parent.orgnaze_name AS parent_name','region.region_name','user.user_name')
//	          ->paginate()->toArray()
//            );
//	        echo '</pre>';


        } ) );
		Route::resource( 'group', 'App\Modules\Admin\Controllers\GroupController' );
		Route::resource( 'orgnaze', 'App\Modules\Admin\Controllers\OrgnazeController' );
		Route::resource( 'region', 'App\Modules\Admin\Controllers\RegionController' );
		Route::resource( 'user', 'App\Modules\Admin\Controllers\UserController' );
		Route::resource( 'resource', 'App\Modules\Admin\Controllers\ResourceController' );
	} );
} );