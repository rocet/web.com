<?php

class Orgnaze extends Tree
{
	protected $table = "orgnaze";
	protected $parentColumn = 'pid';
	protected $guarded = array('orgnaze_name', 'user_id', 'region_id', 'state');

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function users()
	{
		return $this->belongsToMany('User');
	}
}