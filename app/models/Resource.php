<?php

class Resource extends Eloquent
{
	protected $table = 'resource';
	
	protected $guarded = array( 'resource_name', 'target', 'pattern', 'validate', 'secure', 'state' );
	
	public function groups()
	{
		return $this->belongsToMany("Group")->withTimestamps();
	}
}