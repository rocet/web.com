<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 15:20
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
			'filter' => array('model'=> 'Menu', 'field' => 'menu_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Menu', 'field' => 'menu_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'menu', 'field' => 'menu_name'))),
		),
	),
	'menu_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
			'attr' => array('class' => 'form-control')
		),
	),
	'link' => array(
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
	),
);