<?php

class GroupResourceTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$groupResources = array(
			array(
				"group_id" => 1,
				"resource_id" => 1
			),
			array(
				"group_id" => 1,
				"resource_id" => 2
			)
		);

		foreach ($groupResources as $groupResource)
		{
			GroupResource::create($groupResource);
		}
	}
}