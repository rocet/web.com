<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/12
 * Time: 11:03
 */
return array(
	'_nested_category' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'category', 'icon' => 'fa fa-group' ),
		),
	),
	'category' => require 'category.php',

	'_nested_media' => array(
		'grid' => array(
			'show' => false,
			'links' => array( 'model' => 'media', 'icon' => 'fa fa-group' ),
		),
	),
	'media' => require 'media.php',
);