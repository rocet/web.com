<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 16:55
 */

class Article extends Eloquent
{
    protected $table = "article";
    protected $fillable = array('category_id','user_id','title','content','keyword','description','image','sort','state');

	public function category()
	{
		return $this->belongsTo("Category");
	}

	public function medias()
	{
		return $this->hasMany("Media");
	}
}