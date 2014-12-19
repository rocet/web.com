<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/19
 * Time: 11:01
 */

namespace App\External\Member\Controllers;

class MemberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
		return \View::make( $this->tpl() )->with( array( 'item' => $this->dataApi()->indexWithRelate( array('user') ) ) );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
		return \View::make( $this->tpl() );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show( $id ) {
		//
		return \View::make( $this->tpl() );
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit( $id ) {
		//
		$id = $this->realId( $id, func_get_args() );

		return \View::make( $this->tpl() )->with( array( 'item' => $this->dataApi()->edit( $id ) ) )->with( 'id', $id );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update( $id ) {
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy( $id ) {
		//
	}

	protected function realId( $id, $args = array() ) {
		$_currentRelation = $this->getCurrentRelation();

		return ! empty( $_currentRelation ) ? end( $args ) : $id;
	}

	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function tpl() {
		return $this->getCurrentComponent() . '::member.' . strtolower( $this->modelName() );
	}

	protected function dataApi( $model = '' ) {
		$controller = 'App\External\\' . ( $model ?: $this->getCurrentComponent() ) . '\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
	protected function getCurrentRelation() {
		if ( method_exists( $this, 'modelName' ) ) {
			$segments       = \Request::segments();
			$routes         = explode( '.', \Route::currentRouteName() );
			$_relationPaths = array_slice( $segments, 0, array_search( strtolower( $this->modelName().'s' ), $segments ) );
			$_relationRoute = array_slice( $routes, 0, array_search( strtolower( $this->modelName().'s' ), $routes ) );

			return array_combine( $_relationRoute, array_diff( $_relationPaths, array_intersect( $_relationRoute, $_relationPaths ) ) );
		}

		return array();
	}
}