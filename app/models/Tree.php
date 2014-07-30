<?php

abstract class Tree extends Nested
{
	public function selectOptions($pid=null)
	{
		return $this->whereNull('pid')->get();
	}
}