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
    'rule' => array(
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
            'filter' => array('model'=> 'Group', 'field' => 'group_name'),
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
    'state'        => array(
        'grid' => array(
            'show' => true,
        ),
        'form' => array(
            'show' => false,
            'type' => 'text',
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