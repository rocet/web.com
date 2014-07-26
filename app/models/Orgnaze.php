<?php

class Orgnaze extends Nested
{
	protected $table = "orgnaze";
	protected $parentColumn = 'pid';

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