<?php

abstract class Tree extends Nested
{
	public static function selections($field, $pid = 'root', $id = 'id')
	{
		if ( is_string($pid) && $pid = 'root' ) {
			return static::whereNull('pid')->lists($field, $id);
		}
		return static::whereRaw('pid = ?', array($pid))->lists($field, $id);
	}
}