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