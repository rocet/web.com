<?php

class ResourceTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$resources = array(
			array(
				"id" => 1,
				"resource_name" => "组件",
				"target" => "module",
				"user_id" => "1"
			),
			array(
				"id" => 2,
				"resource_name" => "控制器",
				"target" => "controller",
				"user_id" => "1"
			),
			array(
				"id" => 3,
				"resource_name" => "动作",
				"target" => "action",
				"user_id" => "1"
			),
			array(
				"id" => 4,
				"resource_name" => "参数",
				"target" => "query",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "前台",
				"target" => "external",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "数据中心",
				"target" => "Data",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "接口",
				"target" => "Api",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "后台",
				"target" => "Admin",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "店铺",
				"target" => "Shop",
				"user_id" => "1"
			),
			array(
				"pid" => 1,
				"resource_name" => "会员中心",
				"target" => "Member",
				"user_id" => "1"
			),
			array(
				"pid" => 2,
				"resource_name" => "会员",
				"target" => "user",
				"user_id" => "1"
			),
			array(
				"pid" => 2,
				"resource_name" => "资源",
				"target" => "resource",
				"user_id" => "1"
			),
			array(
				"pid" => 2,
				"resource_name" => "用户组",
				"target" => "group",
				"user_id" => "1"
			),
			array(
				"pid" => 2,
				"resource_name" => "地区",
				"target" => "region",
				"user_id" => "1"
			),
			array(
				"pid" => 2,
				"resource_name" => "组织",
				"target" => "organization",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "查看列表",
				"target" => "index",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "创建",
				"target" => "create",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "保存",
				"target" => "store",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "查看详细",
				"target" => "show",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "编辑",
				"target" => "edit",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "更新",
				"target" => "update",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "删除",
				"target" => "destroy",
				"user_id" => "1"
			),
			array(
				"pid" => 3,
				"resource_name" => "批量操作",
				"target" => "batch",
				"user_id" => "1"
			),
		);

		foreach ($resources as $resource)
		{
			Resource::create($resource);
		}
	}
}