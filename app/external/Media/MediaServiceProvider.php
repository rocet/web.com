<?php
namespace App\External\Media;
class MediaServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Media');
	}

	public function boot()
	{
		parent::boot('Media');
	}
}