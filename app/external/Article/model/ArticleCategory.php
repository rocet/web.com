<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 15:18
 */

class ArticleCategory extends \Category
{
	public function articles()
	{
		return $this->hasMany('Article');
	}
}