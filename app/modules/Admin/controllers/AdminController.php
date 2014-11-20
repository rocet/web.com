<?php
namespace App\Modules\Admin\Controllers;

class AdminController extends \BaseController {

	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function error( array $error = array() ) {
		return array( 'errors' => $error );
	}

    protected function dataApi( $model = null ) {
        $controller = 'App\Modules\Data\Controllers\\' . ( $model ?: $this->modelName() ) . 'Controller';

        return class_exists( $controller ) ? App::make( $controller ) : false;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
        return View::make('Admin::'. strtolower( $this->modelName()) )->with('item', $this->dataApi()->index());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
		return View::make('Admin::'.strtolower( $this->modelName()) );
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
		return View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->show($id))->with('id', $id);
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
		return View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->edit($id))->with('id', $id);
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
		var_dump( $id );
	}
}
