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
            'empty' => '',
			'filter' => array('model'=> 'Group', 'field' => 'group_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Group', 'field' => 'group_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'group', 'field' => 'group_name'))),
		),
	),
	'group_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
            'attr' => array('class' => 'form-control')
		),
	),
	'state'        => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'select',
			'options' => array(Lang::get('Admin::common.select')),
            'attr' => array('class' => 'form-control')
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
            'attr' => array('class' => 'form-control')
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
            'attr' => array('class' => 'form-control')
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
	'_nested_user' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'user', 'icon' => 'fa fa-group' ),
		),
	),
	'_nested_resource' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'resource', 'icon' => 'glyphicon glyphicon-compressed' ),
		),
	),
    'resource' => require 'resource.php',
    'user' => require 'user.php',

);