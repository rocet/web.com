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
			'empty' => '',
			'filter' => array('model'=> 'Organization', 'field' => 'organization_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array( Lang::get('Admin::common.select') ),
			'option_model' => array('model' => 'Organization', 'field' => 'organization_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'organization', 'field' => 'organization_name'))),
		),
	),
	'organization_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
            'attr' => array('class' => 'form-control')
		),
	),
	'region_id'    => array(
		'grid' => array(
			'show' => true,
			'filter' => array('model'=> 'Region', 'field' => 'region_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Region', 'field' => 'region_name'),
			'attr' => array('data-src' => URL::route('selections', array('model' => 'region', 'field' => 'region_name'))),
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

);