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
            'attr' => array('class' => 'form-control')
		),
	),
	'email'      => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'email',
            'attr' => array('class' => 'form-control')
		),
	),
	'mobile'     => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
            'attr' => array('class' => 'form-control')
		),
	),
	'group_id'   => array(
		'grid' => array(
			'show' => true,
			'filter' => array('model'=> 'Group', 'relate' => 'group', 'field' => 'group_name'),
		),
		'form' => array(
			'show'         => true,
			'type'         => 'treeSelect',
			'options'      => array( Lang::get('Admin::common.select') ),
			'option_model' => array( 'model' => 'Group', 'field' => 'group_name' ),
			'attr'         => array( 'class' => 'form-control',
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
			'filter' => array('model'=> 'Region', 'relate' => 'region', 'field' => 'region_name'),
		),
		'form' => array(
			'show'         => true,
			'type'         => 'treeSelect',
			'options'      => array( Lang::get('Admin::common.select') ),
			'option_model' => array( 'model' => 'Region', 'field' => 'region_name' ),
			'attr'         => array( 'class' => 'form-control',
				'data-src' => URL::route( 'selections', array(
						'model' => 'region',
						'field' => 'region_name'
					) )
			),
		),
	),
	'organization_id' => array(
		'grid' => array(
			'show' => true,
			'filter' => array('model'=> 'Organization', 'relate' => 'organization', 'field' => 'organization_name'),
		),
		'form' => array(
			'show'         => true,
			'type'         => 'treeSelect',
			'options'      => array( Lang::get('Admin::common.select') ),
			'option_model' => array( 'model' => 'Organization', 'field' => 'organization_name' ),
			'attr'         => array( 'class' => 'form-control',
				'data-src' => URL::route( 'selections', array(
						'model' => 'organization',
						'field' => 'organization_name'
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