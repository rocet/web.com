<?php
namespace App\External\Comment;
class CommentServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Comment');
	}

	public function boot()
	{
		parent::boot('Comment');
	}
}