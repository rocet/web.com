<?php

class GroupUserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$groupUsers = array(
			array(
				"user_id" => 1,
				"group_id" => 1
			),
			array(
				"user_id" => 2,
				"group_id" => 1
			)
		);

		foreach ($groupUsers as $groupUser)
		{
			GroupUser::create($groupUser);
		}
	}
}