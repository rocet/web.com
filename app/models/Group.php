<?php

class Group extends Tree
{
	protected $table = "group";
	protected $parentColumn = 'pid';
	protected $guarded = array( 'group_name', 'user_id', 'state');

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