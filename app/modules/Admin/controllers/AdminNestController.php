<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/4
 * Time: 14:42
 */

namespace App\Modules\Admin\Controllers;

class AdminNestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $reId ) {
		//
		return \View::make( 'Admin::' . strtolower( $this->modelName() ) )->with( 'item', $this->dataApi()->index() );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create( $reId ) {
		//
		return \View::make( 'Admin::' . strtolower( $this->modelName() ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( $reId ) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show( $reId, $id ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit( $reId, $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update( $reId, $id ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy( $reId, $id ) {
		//
	}

	/**
	 * 批量操作
	 *
	 * @return Response
	 */
	public function batch( $reId, $reqAll ) {

	}

	protected function modelName() {
		return ucfirst( explode( '_', snake_case( class_basename( get_class( $this ) ) ) )[1] );  // substr( strrchr( get_class( $this ), '\\' ), 1, - 10 ); //
	}

	protected function dataApi( $model = null ) {
		$controller = 'App\Modules\Data\Controllers\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller ) : false;
	}

	protected function getCurrentController() {
		return str_replace('_', '.', snake_case(substr( strrchr( get_class( $this ), '\\' ), 1, - 10 ))); //strstr( trim( strstr( Route::currentRouteName(), '.' ), '.' ), '.', true );
	}

	protected function getCurrentAction() {
		return substr( strrchr( Route::currentRouteName(), '.' ), 1 );
	}

}
