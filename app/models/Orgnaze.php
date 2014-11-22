<?php

class Orgnaze extends Tree
{
	protected $table = "orgnaze";

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