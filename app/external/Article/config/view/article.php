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
	'category_id'          => array(
		'grid' => array(
			'show' => true,
			'empty' => '',
			'filter' => array('model'=> 'Category', 'relate' => 'category', 'field' => 'category_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Category', 'field' => 'category_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'category', 'field' => 'category_name'))),
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
	'content' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'editor',
			'attr' => array('class' => 'form-control')
		),
	),
	'keyword' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
			'attr' => array('class' => 'form-control')
		),
	),
	'description' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'textArea',
			'attr' => array('class' => 'form-control')
		),
	),
	'image' => array(
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
	'_nested_media' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'media', 'icon' => 'fa fa-image' ),
		),
	),
	'media' => require 'media.php',


	'_nested_comment' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'comment', 'icon' => 'fa fa-comments' ),
		),
	),
	'comment' => require 'comment.php',
);