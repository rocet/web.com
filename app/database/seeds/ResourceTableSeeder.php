<?php

class ResourceTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$resources = array(
			array(
				"resource_name" => "会员",
				"user_id" => "1"
			),
			array(
				"resource_name" => "资源",
				"user_id" => "1"
			),
			array(
				"resource_name" => "用户组",
				"user_id" => "1"
			),
			array(
				"resource_name" => "地区",
				"user_id" => "1"
			),
			array(
				"resource_name" => "组织",
				"user_id" => "1"
			)
		);

		foreach ($resources as $resource)
		{
			Resource::create($resource);
		}
	}
}