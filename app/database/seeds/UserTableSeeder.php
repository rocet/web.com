<?php

class UserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$users = array(
			array(
				"user_name" => "admin",
				"password" => Hash::make("admin"),
				"email"    => "admin@admin.com",
				"group_id" => "1"
			),
			array(
				"user_name" => "rocet",
				"password" => Hash::make("rocet"),
				"email"    => "rocet@admin.com",
				"group_id" => "1"
			)
		);

		foreach ($users as $user)
		{
			User::create($user);
		}
	}
}