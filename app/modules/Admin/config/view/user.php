<?php

return array(
	'id'         => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
	'user_name'  => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
		),
	),
	'email'      => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'email',
		),
	),
	'mobile'     => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
		),
	),
	'group_id'   => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show'         => true,
			'type'         => 'treeSelect',
			'options'      => array( '请选择' ),
			'option_model' => array( 'model' => 'Group', 'field' => 'group_name' ),
			'attr'         => array(
				'data-src' => URL::route( 'selections', array(
						'model' => 'group',
						'field' => 'group_name'
					) )
			),
		),
	),
	'region_id'  => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show'         => true,
			'type'         => 'regionSelect',
			'options'      => array( '请选择' ),
			'option_model' => array( 'model' => 'Region', 'field' => 'region_name' ),
			'attr'         => array(
				'data-src' => URL::route( 'selections', array(
						'model' => 'region',
						'field' => 'region_name'
					) )
			),
		),
	),
	'orgnaze_id' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show'         => true,
			'type'         => 'treeSelect',
			'options'      => array( '请选择' ),
			'option_model' => array( 'model' => 'Orgnaze', 'field' => 'orgnaze_name' ),
			'attr'         => array(
				'data-src' => URL::route( 'selections', array(
						'model' => 'orgnaze',
						'field' => 'orgnaze_name'
					) )
			),
		),
	),
	'state'      => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
	'created_at' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
);