<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/23
 * Time: 11:03
 */

namespace App\External\CustomMeta\Model;


class CustomMeta extends \Eloquent {
	protected $table = 'custommeta';
	protected $fillable = array('item_id','user_id','component_id','type','field','value','lngval','defval','searchable','showable');

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