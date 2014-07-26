<?php
namespace App\Modules\Admin\Controllers;
class HomesController extends AdminController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		// $user = new \User();
		$user = new \User();
		// var_dump( Config::get('Admin::view') );
		return View::make('Admin::admin');
		// return $user->all()->toArray();
	}

}
