<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/23
 * Time: 11:01
 */

namespace App\External\CustomMeta;


class CustomMetaServiceProvider  extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('CustomMeta');
	}

	public function boot()
	{
		parent::boot('CustomMeta');
	}
}