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

	public function component()
	{
		return $this->belongsTo('Component');
	}

	public function article()
	{
		return $this->belongsTo('Article');
	}
}