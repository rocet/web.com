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
            array('flag' => 'article', 'title' => Lang::get( 'Article::article.create' ), 'link' => URL::route( 'article.create' ) ),
            array('flag' => 'article', 'title' => Lang::get( 'Article::common.article' ), 'link' => URL::route( 'article.index' ) ),
            array('flag' => 'category', 'title' => Lang::get( 'Article::common.category' ), 'link' => URL::route( 'component.category.index', array('id' => array_search('Article',$components) ) ) ),
            array('flag' => 'media', 'title' => Lang::get( 'Article::common.media' ), 'link' => URL::route( 'component.media.index', array('id' => array_search('Article',$components) ) ) ),
			array('flag' => 'comment', 'title' => Lang::get( 'Article::common.comment' ), 'link' => URL::route( 'component.comment.index', array('id' => array_search('Article',$components) ) ) ),
		),
	),
);