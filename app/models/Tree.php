<?php

abstract class Tree extends Nested
{
	protected $parentColumn = 'pid';
	protected $guarded = array('lft', 'rgt', 'depth');

	public static function selections($field, $pid = 'root', $id = 'id')
	{
		if ( is_string($pid) && $pid == 'root' ) {
			return static::whereNull('pid')->lists($field, $id);
		}
		return static::whereRaw('pid = ?', array($pid))->lists($field, $id);
	}

	public function getParentColumn(){
		return $this->parentColumn;
	}

	public function getSortColumn(){
		return $this->parentColumn;
	}
}