<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 16:55
 */

class Article extends Eloquent
{
    protected $table = 'article';
    protected $fillable = array('category_id','user_id','title','content','keyword','description','image','sort','state');

    public function user()
    {
        return $this->belongsTo('User');
    }

	public function category()
	{
		return $this->belongsTo('Category');
	}

	public function medias()
	{
		return $this->hasMany('Media', 'item_id');
	}

	public function comments()
	{
		return $this->hasMany('Comment', 'item_id');
	}
}