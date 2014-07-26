<?php

class Region extends Eloquent
{
	protected $table = "region";

	public function users()
	{
		return $this->hasMany('User');
	}
	
	public function orgnazes()
	{
		return $this->hasMany('Orgnazes');
	}
}