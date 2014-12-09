<?php
namespace App\External\Article;
class ArticleServiceProvider extends \App\External\ServiceProvider
{
	public function register()
	{
		parent::register('Article');
	}

	public function boot()
	{
		parent::boot('Article');
	}
}