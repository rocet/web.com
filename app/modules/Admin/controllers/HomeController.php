<?php
namespace App\Modules\Admin\Controllers;
class HomesController extends AdminController
{
	public function showWelcome()
	{
		dd(Config::get('Admin::view'), /*\User::all()->toArray(),*/
			$this->dataApi('UserGroup')->index());
		return View::make('Admin::admin');
	}
}
