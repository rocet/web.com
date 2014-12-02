<?php

return array(
	// 分页数据 每页条数
	'per_page' => array(
		// 默认条数
		'default' => 5,
		// 自定义条数
		'user' => 10,
		'group' => 10
	),
	// 排序
	'order' => array(
		// 默认排序
		'default' => 'desc',
		// 自定义排序
		'user' => 'desc',
		'group' => 'asc'
	),
	// 默认排序字段
	'column' => array(
		// 默认排序
		'default' => 'id',
		// 自定义排序
		'user' => 'user_name',
		'group' => 'group_name'
	),
);