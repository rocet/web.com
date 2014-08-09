<?php

abstract class Tree extends Nested
{
	public function selections($pid=null)
	{
		return $this->whereNull('pid')->get();
	}
}