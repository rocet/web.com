<?php
namespace App\External\Member;
class MemberServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Member');
	}

	public function boot()
	{
		parent::boot('Member');
	}
}