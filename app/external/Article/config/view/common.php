<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/10
 * Time: 17:12
 */
return array(
	'menus' => array(
		'article' => array(
            array('flag' => 'category',  'title' => Lang::get( 'Article::common.category' ), 'link' => URL::route( 'category.index' ) ),
            array('flag' => 'article',  'title' => Lang::get( 'Article::common.article' ), 'link' => URL::route( 'article.index' ) ),
		),
	),
);