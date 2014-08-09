<?php

Route::group(array('domain' => 'data.web.com'), function(){   // ,'prefix' => 'v1'  version
	// 控制器集合
	$resources = array('user','resource','group','orgnaze','region');
	// 公共附加集合
	$additionals = array('selections'=>'get', 'paginate'=>'get');

	foreach ($resources as $resource) {
		// 自定义路由

		// 公共附加路由
		foreach ($additionals as $additional => $method) {
			Route::{$method}($resource.'/'.$additional, 'App\Modules\Data\Controllers\\'.ucfirst($resource).'Controller@'.$additional);
		}
		// 默认REST公共路由
		Route::resource($resource, 'App\Modules\Data\Controllers\\'.ucfirst($resource).'Controller');

		
		// 自定义Nested REST路由

		// 默认Nested REST公共路由
		foreach ($resources as $neste) {
			if( $resource != $neste ){
				$nesteResource = 'App\Modules\Data\Controllers\\'. ucfirst($resource) . ucfirst($neste) . 'Controller';
				$refNesteResource = 'App\Modules\Data\Controllers\\'. ucfirst($neste) . ucfirst($resource) . 'Controller';
				if( class_exists( $nesteResource ) ){
					$nestRest = $resource. '.' .$neste;
					// 公共Nested REST附加路由
					foreach ($additionals as $additional => $method) {
						if( !Route::getRoutes()->hasNamedRoute($nestRest.'/'.$additional) ){
							Route::{$method}($nestRest.'/'.$additional, $nesteResource.'@'.$additional);
						}
					}
					if( !Route::getRoutes()->hasNamedRoute($nestRest) ){
						Route::resource($nestRest, $nesteResource);
					}
					
				}
				if( class_exists( $refNesteResource ) ){
					$refNestRest = $neste. '.' .$resource;
					// 公共Nested REST附加路由
					foreach ($additionals as $additional => $method) {
						if( !Route::getRoutes()->hasNamedRoute($refNestRest.'/'.$additional) ){
							Route::{$method}($refNestRest.'/'.$additional, $refNesteResource.'@'.$additional);
						}
					}
					if( !Route::getRoutes()->hasNamedRoute($refNestRest) ){
						Route::resource($refNestRest, $refNesteResource);
					}
				}
			}
		}
	}
});