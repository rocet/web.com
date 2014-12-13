<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/10
 * Time: 22:32
 */
return array(
    'menus' => array(
        'comment' => array(
            array('flag' => 'comment',  'title' => Lang::get( 'Comment::common.comment' ), 'link' => URL::route( 'comment.index' ) ),
        ),
    ),
);