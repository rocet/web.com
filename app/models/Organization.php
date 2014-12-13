<?php

class Organization extends Tree
{
	protected $table = 'organization';

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