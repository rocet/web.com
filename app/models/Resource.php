<?php

class Resource extends Eloquent
{
	protected $table = 'resource';
	
	public function groups()
	{
		return $this->belongsToMany("Group")->withTimestamps();
	}
}