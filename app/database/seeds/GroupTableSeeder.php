<?php

class GroupTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$groups = array(
			array(
				"group_name" => "admin"
			),
			array(
				"group_name" => "newbie"
			)
		);

		foreach ($groups as $group)
		{
			Group::create($group);
		}
	}
}