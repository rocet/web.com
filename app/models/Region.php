<?php

class Region extends Eloquent
{
	protected $table = "region";
	// public $timestamps = false;

	public function users()
	{
		return $this->hasMany('User');
	}
	
	public function orgnazes()
	{
		return $this->hasMany('Orgnazes');
	}
}