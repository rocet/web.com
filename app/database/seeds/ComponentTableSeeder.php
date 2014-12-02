<?php

class ComponentTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$components = array(
			array(
                "id" => 1,
				"component_name" => "前端",
                "flag" => "",
				"user_id" => "1"
			),
			array(
                "id" => 2,
				"component_name" => "模块",
                "flag" => "modules",
				"user_id" => "1"
			),
			array(
                "id" => 3,
				"component_name" => "扩展",
                "flag" => "external",
				"user_id" => "1"
			),
			array(
                "id" => 4,
				"component_name" => "插件",
                "flag" => "plugin",
				"user_id" => "1"
			),
            array(
                "pid" => 1,
                "component_name" => "前台",
                "flag" => "external",
                "user_id" => "1"
            ),
            array(
                "pid" => 2,
                "component_name" => "数据中心",
                "flag" => "Data",
                "user_id" => "1"
            ),
            array(
                "pid" => 2,
                "component_name" => "接口",
                "flag" => "Api",
                "user_id" => "1"
            ),
            array(
                "pid" => 2,
                "component_name" => "后台",
                "flag" => "Admin",
                "user_id" => "1"
            ),
            array(
                "pid" => 3,
                "component_name" => "店铺",
                "flag" => "Shop",
                "user_id" => "1"
            ),
            array(
                "pid" => 3,
                "component_name" => "会员中心",
                "flag" => "Member",
                "user_id" => "1"
            ),
		);

		foreach ($components as $component)
		{
			Component::create($component);
		}
	}
}