<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/10
 * Time: 22:20
 */

class Media extends Eloquent
{
    protected $table = 'media';
    protected $fillable = array('component_id','user_id','item_id','title','description','path','sort','state');

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