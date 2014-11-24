<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/10
 * Time: 11:01
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
			'type' => 'treeSelect',
			'options' => array('0' => '请选择'),
			'option_model' => array('model' => 'Orgnaze', 'field' => 'orgnaze_name'),
			'attr' => array('data-src' => URL::route('selections', array('model' => 'orgnaze', 'field' => 'orgnaze_name'))),
		),
	),
	'orgnaze_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
		),
	),
	'region_id'    => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'regionSelect',
			'options' => array('0' => '请选择'),
			'option_model' => array('model' => 'Region', 'field' => 'region_name'),
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