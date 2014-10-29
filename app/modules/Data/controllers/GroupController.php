<?php
namespace App\Modules\Data\Controllers;
class GroupController extends InitController
{
	public function validate(\Closure $callback, $input, $exists = 1)
	{
		$valid = array(
			"id" => 'notin:1,2|exists:group,id',
			'name' => 'required|name|' . ($exists ? 'exists' : 'unique') . ':group,name'
		);

		$valid = \Validator::make($input, array_intersect_key($valid, $input));
		if ($valid->passes()) {
			return $callback();
		}
		return $valid;
	}
}
