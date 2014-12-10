<?php
namespace App\Modules\Admin\Controllers;
class HomeController extends AdminController
{
	public function index()
	{
        return \View::make('Admin::admin' )->with(array(
            '_current_component' => 'Admin',
            '_current_controller' => 'admin'
        ));
	}
}
