<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:10
 */

namespace App\External\Tag;


class TagServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Tag');
	}

	public function boot()
	{
		parent::boot('Tag');
	}
}