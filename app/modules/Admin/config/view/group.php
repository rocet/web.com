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
			'filter' => array('model'=> 'Group', 'field' => 'group_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array('请选择'),
			'option_model' => array('model' => 'Group', 'field' => 'group_name'),
			'attr' => array('data-src' => URL::route('selections', array('model' => 'group', 'field' => 'group_name'))),
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
			'options' => array('请选择'),
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
			'filter' => array('model'=> 'User', 'field' => 'user_name'),
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