<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:14
 */

namespace App\External\Tag\Model;


class Tag extends \Eloquent {
	protected $table = 'tag';
	protected $fillable = array('item_id','user_id','component_id','title','state','sort');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function component()
	{
		return $this->belongsTo('Component');
	}

	public function item($component)
	{
		return $this->belongsTo($component);
	}
}