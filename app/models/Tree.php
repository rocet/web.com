<?php

abstract class Tree extends Nested
{
	public static function selections($pid=null,$fields=array())
	{
		if( $pid ){
			return static::whereRaw('pid = ?', array($pid))->get($fields);
		} else {
			return static::whereNull('pid')->get($fields);
		}
	}
}