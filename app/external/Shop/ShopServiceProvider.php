<?php
namespace App\External\Shop;
class ShopServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Shop');
	}

	public function boot()
	{
		parent::boot('Shop');
	}
}