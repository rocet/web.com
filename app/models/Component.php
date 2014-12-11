<?php

class Component extends Tree
{
	protected $table = "component";

	public function user()
	{
		return $this->belongsTo("User");
	}

    public function categorys()
    {
        return $this->hasMany("Category");
    }

}
