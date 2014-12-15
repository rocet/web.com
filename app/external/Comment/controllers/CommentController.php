<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/11
 * Time: 9:31
 */

namespace App\External\Comment\Controllers;

class CommentController extends \BaseController {

	public function index(){
		return \View::make('Comment::index')->with(array('item' => $this->dataApi()->indexWithRelate( array('user') ) ));
	}

	public function store(){
		if ( $this->validPass( $process = $this->dataApi()->store( \Input::except( '_token' ) ) ) ) {
			return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="' . \Request::header('Referer') . '">return</a>' );
		}
		if ( ! $process ) {
			$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
		}
		return \Redirect::back()->with(\Input::except( '_token' ))->withErrors( $process );
	}

	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function dataApi( $model = '' ) {
		$controller = 'App\External\Comment\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
}
