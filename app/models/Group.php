<?php

class Group extends Nested
{
	protected $table = "group";
	protected $parentColumn = 'pid';

	public function user()
	{
		return $this->belongsTo("User");
	}

	public function users()
	{
		return $this->belongsToMany("User")->withTimestamps();
	}

	public function resources()
	{
		return $this->belongsToMany("Resource")->withTimestamps();
	}
}