<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 15:18
 */

class Category extends Tree
{
	protected $table = "category";

    public function component()
    {
        return $this->belongsTo("Component");
    }

	public function articles()
	{
		return $this->hasMany("Article");
	}
}