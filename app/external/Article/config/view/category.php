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
	'component_id'      => array(
		'grid' => array(
			'show' => true,
			'filter' => array('model'=> 'Component', 'relate' => 'component', 'field' => 'component_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Component', 'field' => 'component_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'component', 'field' => 'component_name'))),
		),
	),
	'pid'          => array(
		'grid' => array(
			'show' => true,
			'empty' => '',
			'filter' => array('model'=> 'Category', 'relate' => 'parent', 'field' => 'category_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Category', 'field' => 'category_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'category', 'field' => 'category_name'))),
		),
	),
	'category_name' => array(
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
	'created_at'   => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	)

);