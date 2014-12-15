<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 16:53
 */

namespace App\External\Article\Controllers;

class ArticleController extends \BaseController {

	public function index( ){
		return \View::make('Article::index')->with(array('item' => $this->dataApi()->indexWithRelate( array('user','category','comments', 'medias') ) ));
	}

	public function show( $id )
	{
		//
		return \View::make('Article::show')->with(array('item' => $this->dataApi()->showWithRelate( $id, array('user','category','comments', 'medias') ) ));
	}

	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function dataApi( $model = '' ) {
		$controller = 'App\External\Article\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
}
