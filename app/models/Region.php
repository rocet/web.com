<?php

class Region extends Tree
{
	protected $table = 'region';
	protected $parentColumn = 'pid';
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('User');
	}

	public function Organizations()
	{
		return $this->hasMany('Organizations');
	}

    public static function selections($field, $pid = 'root', $id = 'id')
    {
        if ( is_string($pid) && $pid == 'root' ) {
            return static::whereNull('pid')->lists($field, $id);
        }
        return static::whereRaw('pid = ?', array( intval( $pid )))->lists($field, $id);
    }

	public function getParentColumn(){
		return $this->parentColumn;
	}
}