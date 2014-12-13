<?php

class Resource extends Tree
{
	protected $table = 'resource';

//	protected $guarded = array('resource_name', 'target', 'pattern', 'validate', 'secure', 'state');

	public function groups()
	{
		return $this->belongsToMany('Group')->withTimestamps();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function users()
	{
		return $this->belongsToMany('User')->withTimestamps();
	}
}