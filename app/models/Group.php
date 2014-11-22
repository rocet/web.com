<?php

class Group extends Tree
{
	protected $table = "group";

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