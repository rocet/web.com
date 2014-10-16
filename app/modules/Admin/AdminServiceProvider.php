<?php
namespace App\Modules\Admin;
class AdminServiceProvider extends \App\Modules\ServiceProvider
{
	public function register()
	{
		parent::register('Admin');
	}

	public function boot()
	{
		parent::boot('Admin');
	}
}