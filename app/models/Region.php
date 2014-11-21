<?php

class Region extends Eloquent
{
	protected $table = "region";
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('User');
	}

	public function orgnazes()
	{
		return $this->hasMany('Orgnazes');
	}

    public static function selections($field, $pid = 'root', $id = 'id')
    {
        if ( is_string($pid) && $pid == 'root' ) {
            return static::whereNull('pid')->lists($field, $id);
        }
        return static::whereRaw('pid = ?', array( intval( $pid )))->lists($field, $id);
    }
}