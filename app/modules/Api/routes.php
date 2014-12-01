<?php

Route::group(array('domain' => 'api.web.com', 'prefix' => 'v1'), function () {
	// 控制器集合
	$resources = array('user', 'resource', 'group', 'organization', 'region');
	// 公共附加集合
	$additionals = array('selections' => array('method' => 'get', 'param' => 'pid', 'rule' => '[0-9]+'), 'paginate' => 'get');

	// 自定义路由
	Route::get('/', 'App\Modules\Api\Controllers\CommonController@showWelcome');
	Route::post('/registe/validate', 'App\Modules\Api\Controllers\UserController@validateError');
	Route::post('/registe', 'App\Modules\Api\Controllers\UserController@register');
	Route::post('/login', 'App\Modules\Api\Controllers\UserController@formLogin');
	// Route::get('/region/{pid?}', 'App\Modules\Api\Controllers\CommonController@regions')->where('pid', '[0-9]+');
	// Route::get('/users/{page?}', 'App\Modules\Api\Controllers\UserController@paginate')->where('page', '[0-9]+');
	// Route::get('/user/{id?}', 'App\Modules\Api\Controllers\UserController@getOne')->where('id', '[0-9]+');

	foreach ($resources as $resource) {
		// 公共附加路由
		foreach ($additionals as $additional => $option) {
			if (is_array($option)) {
				Route::$option['method']($resource . '/' . $additional . '/{' . $option['param'] . '?}', 'App\Modules\Api\Controllers\\' . ucfirst($resource) . 'Controller@' . $additional)->where($option['param'], $option['rule']);
			} else {
				Route::$option($resource . '/' . $additional, 'App\Modules\Api\Controllers\\' . ucfirst($resource) . 'Controller@' . $additional);
			}
		}
		// 默认REST公共路由
		Route::resource($resource, 'App\Modules\Api\Controllers\\' . ucfirst($resource) . 'Controller');

		// 自定义Nested REST路由

		// 默认Nested REST公共路由  关系型
		foreach ($resources as $neste) {
			if ($resource != $neste) {
				$nesteResource = 'App\Modules\Api\Controllers\\' . ucfirst($resource) . ucfirst($neste) . 'Controller';
				$refNesteResource = 'App\Modules\Api\Controllers\\' . ucfirst($neste) . ucfirst($resource) . 'Controller';
				if (class_exists($nesteResource)) {
					$nestRest = $resource . '.' . $neste;
					// 公共Nested REST附加路由 正向
					foreach ($additionals as $additional => $option) {
						if (method_exists($nestRest, $additional) && !Route::getRoutes()->hasNamedRoute($nestRest . '/' . $additional)) {
							if (is_array($option)) {
								Route::$option['method']($nestRest . '/' . $additional . '/{' . $option['param'] . '?}', $nesteResource . '@' . $additional)->where($option['param'], $option['rule']);
							} else {
								Route::$option($nestRest . '/' . $additional, $nesteResource . '@' . $additional);
							}
						}
					}
					if (!Route::getRoutes()->hasNamedRoute($nestRest)) {
						Route::resource($nestRest, $nesteResource);
					}
				}
				if (class_exists($refNesteResource)) {
					$refNestRest = $neste . '.' . $resource;
					// 公共Nested REST附加路由 反向
					foreach ($additionals as $additional => $option) {
						if (method_exists($refNestRest, $additional) && !Route::getRoutes()->hasNamedRoute($refNestRest . '/' . $additional)) {
							if (is_array($option)) {
								Route::$option['method']($refNestRest . '/' . $additional . '/{' . $option['param'] . '?}', $refNesteResource . '@' . $additional)->where($option['param'], $option['rule']);
							} else {
								Route::$option($refNestRest . '/' . $additional, $refNesteResource . '@' . $additional);
							}
						}
					}
					if (!Route::getRoutes()->hasNamedRoute($refNestRest)) {
						Route::resource($refNestRest, $refNesteResource);
					}
				}
			}
		}
	}
});