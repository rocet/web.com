<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/22
 * Time: 16:24
 */


return array(
	'id'           => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
	'pid'          => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'select',
			'options' => array('0' => '请选择') + Group::selections('group_name'),
		),
	),
	'group_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
		),
	),
	'state'        => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'select',
			'options' => array('0' => '请选择'),
		),
	),
	'sort'         => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'number',
			'value' => '0',
		),
	),
	'user_id'      => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'hidden',
			'value' => '1',
		),
	),
	'created_at'   => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),

);