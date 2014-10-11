<?php
Route::get('/', array('as' => 'home', 'uses' => function(){
    return View::make('hello');
}));
Route::get('/doc', array('as' => 'doc', 'uses' => function(){
    return View::make('doc');
}));
Route::group(array("before" => "guest"), function() {
    $guest_agrees = array(
        array('path' => '/login', 'alias' => 'login', 'action' => function () {
            return View::make('hello');
        }),
        array('path' => '/login', 'alias' => 'login', 'action' => 'FontedController@login', 'method'=> 'post'),
        array('path' => '/register', 'alias' => 'register', 'action' => function () {
            return View::make('hello');
        }),
        array('path' => '/register', 'alias' => 'register', 'action' => 'FontedController@register', 'method'=> 'post'),
        array('path' => '/forgetPassword', 'alias' => 'forgetPassword', 'action' => function () {
            return View::make('hello');
        }),
        array('path' => '/forgetPassword', 'alias' => 'forgetPassword', 'action' => 'FontedController@forgetPassword', 'method'=> 'post'),
        array('path' => '/reminder', 'alias' => 'reminder', 'action' => function () {
            return View::make('hello');
        }),
    );
    foreach($guest_agrees as $agree){
        $method = isset($agree['method']) ? $agree['method'] : 'get';
        Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
    }
});
Route::group(array("before" => "auth"), function() {
    $auth_agrees = array(
        array('path' => '/changePassword', 'alias' => 'changePassword', 'action' => function () {
            return View::make('hello');
        }),
        array('path' => '/changePassword', 'alias' => 'changePassword', 'action' => 'FontedController@changePassword', 'method'=> 'post'),
        array('path' => '/logout', 'alias' => 'logout', 'action' => function () {
            Auth::logout();
            return Redirect::to('/');
        })
    );
    foreach($auth_agrees as $agree){
        $method = isset($agree['method']) ? $agree['method'] : 'get';
        Route::$method($agree['path'], array('as' => $agree['alias'], 'uses' => $agree['action']));
    }
});