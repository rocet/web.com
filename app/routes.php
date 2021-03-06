<?php

Route::group(array('domain' => 'http://web.com'), function () {
	if( strstr(URL::current(), 'http://web.com') ){
		Header( 'HTTP/1.1 301 Moved Permanently' );
		Header( 'Location: '.str_replace( 'http://web.com', 'http://www.web.com', URL::current() ) );
		exit();
	}
});

Route::group(array('domain' => 'www.web.com'), function () {
	$default_agree = array(
		array('path' => '/', 'alias' => 'home', 'action' => function () {
			return View::make('hello');
		}),
		array('path' => '/doc', 'alias' => 'doc', 'action' => function () {
			return View::make('doc');
		}),
		array('path' => '/selections', 'alias' => 'selections', 'action' => 'FrontendController@selections'),
		array('path' => '/message', 'alias' => 'message', 'action' => function () {
			return View::make('hello');
		})
	);
	foreach ($default_agree as $agree) {
		$method = isset($agree['method']) ? $agree['method'] : 'get';
		Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
	}
	Route::group(array("before" => "guest"), function () {
		$guest_agrees = array(
			array('path' => '/login', 'alias' => 'login', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/login', 'alias' => 'login', 'action' => 'FrontendController@login', 'method' => 'post'),
			array('path' => '/register', 'alias' => 'register', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/register', 'alias' => 'register', 'action' => 'FrontendController@register', 'method' => 'post'),
			array('path' => '/reminder', 'alias' => 'reminder', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/reminder', 'alias' => 'reminder', 'action' => 'FrontendController@reminder', 'method' => 'post'),
			array('path' => '/reset', 'alias' => 'reset', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/reset', 'alias' => 'reset', 'action' => 'FrontendController@reset', 'method' => 'post'),
		);
		foreach ($guest_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
	});
	Route::group(array("before" => "auth"), function () {
		$auth_agrees = array(
			array('path' => '/profile', 'alias' => 'profile', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/profile', 'alias' => 'profile', 'action' => 'FrontendController@profile', 'method' => 'post'),
			array('path' => '/changePassword', 'alias' => 'changePassword', 'action' => function () {
				return View::make('hello');
			}),
			array('path' => '/changePassword', 'alias' => 'changePassword', 'action' => 'FrontendController@changePassword', 'method' => 'post'),
			array('path' => '/logout', 'alias' => 'logout', 'action' => function () {
				Auth::logout();
				return Redirect::to('/');
			})
		);
		foreach ($auth_agrees as $agree) {
			$method = isset($agree['method']) ? $agree['method'] : 'get';
			Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
		}
	});
});
