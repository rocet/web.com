<?php
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
			'filter' => array('model'=> 'Resource', 'field' => 'resource_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Resource', 'field' => 'resource_name'),
			'attr' => array('data-src' => URL::route('selections', array('model' => 'Resource', 'field' => 'resource_name'))),
		),
	),
	'resource_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
		),
	),
    'target' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
        ),
    ),
    'pattern' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
        ),
    ),
    'validate' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
        ),
    ),
    'secure' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
        ),
    ),
	'state'        => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
            'show' => true,
            'type' => 'text',
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
        ),
    ),
	'created_at'         => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
);