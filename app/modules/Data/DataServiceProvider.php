<?php
namespace App\Modules\Data;
class DataServiceProvider extends \App\Modules\ServiceProvider
{
	public function register()
	{
		parent::register('Data');
	}

	public function boot()
	{
		parent::boot('Data');
	}
}