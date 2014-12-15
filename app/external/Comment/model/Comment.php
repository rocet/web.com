<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/13
 * Time: 15:18
 */

class Comment extends Eloquent
{
	protected $table = 'comment';
	protected $fillable = array('item_id','user_id','component_id','title','content','state','sort');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function component()
	{
		return $this->belongsTo('Component');
	}

	public function article()
	{
		return $this->belongsTo('Article');
	}
}