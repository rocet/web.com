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
			'links' => array( 'model' => 'category', 'icon' => 'fa fa-cubes' ),
		),
	),
	'category' => require 'category.php',

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