<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:19
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
	'item_id'          => array(
		'grid' => array(
			'show' => true,
			'empty' => '',
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
			'attr' => array('class' => 'form-control')
		),
	),
	'user_id'      => array(
		'grid' => array(
			'show' => true,
			'filter' => array('model'=> 'User', 'relate' => 'user', 'field' => 'user_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'hidden',
			'value' => '1',
			'attr' => array('class' => 'form-control')
		),
	),
	'title' => array(
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