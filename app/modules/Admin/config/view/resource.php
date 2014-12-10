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
            'empty' => '',
			'filter' => array('model'=> 'Resource', 'relate' => 'parent', 'field' => 'resource_name'),
		),
		'form' => array(
			'show' => true,
			'type' => 'treeSelect',
			'options' => array(Lang::get('Admin::common.select')),
			'option_model' => array('model' => 'Resource', 'field' => 'resource_name'),
			'attr' => array('class' => 'form-control', 'data-src' => URL::route('selections', array('model' => 'Resource', 'field' => 'resource_name'))),
		),
	),
	'resource_name' => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => true,
			'type' => 'text',
            'attr' => array('class' => 'form-control')
		),
	),
    'target' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
            'attr' => array('class' => 'form-control')
        ),
    ),
    'pattern' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
            'attr' => array('class' => 'form-control')
        ),
    ),
    'validate' => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => true,
            'type' => 'text',
            'attr' => array('class' => 'form-control')
        ),
    ),
    'secure' => array(
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
	'created_at'         => array(
		'grid' => array(
			'show' => true,
		),
		'form' => array(
			'show' => false,
		),
	),
);