<?php

class GroupTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$groups = array(
			array(
				'group_name' => 'admin',
				'user_id' => 1
			),
			array(
				'group_name' => 'newbie',
				'user_id' => 1
			)
		);

		foreach ($groups as $group)
		{
			Group::create($group);
		}
	}
}