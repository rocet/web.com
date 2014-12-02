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

        return class_exists( $controller ) ? \App::make( $controller ) : false;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \View
	 */
	public function index() {
		//
        return \View::make('Admin::'. strtolower( $this->modelName()) )->with('item', $this->dataApi()->index());
		// return View::make('Admin::'. strtolower( $this->modelName()) )->with('item', $this->dataApi()->gridData( Config::get('Admin::view/'.$this->getCurrentController()) ));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \View
	 */
	public function create() {
		//
		return \View::make('Admin::'.strtolower( $this->modelName()) );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \View
	 */
	public function store() {
		//
		if ( $this->validPass( $process = $this->dataApi()->store(  \Input::except('_token') ) ) ) {
			return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="'.\URL::route($this->getCurrentController().'.index').'">return</a> <a href="'.\URL::route($this->getCurrentController().'.create').'">create new</a>' );
		}
		if ( ! $process ) {
			$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
		}
		return \View::make( 'Admin::'.strtolower( $this->modelName()) )->withInput(\Input::except('_token'))->withErrors( $process );
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \View
	 */
	public function show( $id ) {
		//
		return \View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->show($id))->with('id', $id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \View
	 */
	public function edit( $id ) {
		//
		return \View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->edit($id))->with('id', $id);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return \View
	 */
	public function update( $id ) {
		//
		if ( $this->validPass( $process = $this->dataApi()->update( $id,  \Input::except('_token', '_method') ) ) ) {
			return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="'.\URL::route($this->getCurrentController().'.index').'">return</a> <a href="'.\URL::route($this->getCurrentController().'.edit', array('id' => $id)).'">edit again</a>' );
		}
		if ( ! $process ) {
			$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
		}
		return \View::make( 'Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->edit($id))->with('id', $id)->withInput(\Input::except('_token', '_method'))->withErrors( $process );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \View
	 */
	public function destroy( $id ) {
		//
		var_dump( 'destroy' . $id );
	}


	/**
	 * 批量操作
	 *
	 * @return Response
	 */
	public function batch($reqAll) {
		foreach($reqAll as $index => $req){
			if ( $this->validPass( $process[$index] = call_user_func_array(array($this->dataApi(), $req['method']), array_except($req, 'method')) ) ) {

			}
			if ( ! $process[$index] ) {
				$process[$index] = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}
		}
	}
}
