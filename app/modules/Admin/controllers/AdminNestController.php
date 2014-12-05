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
        if ( $this->validPass( $process = $this->dataApi()->store(  \Input::except('_token') ) ) ) {
            return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="'.\URL::route($this->getCurrentController().'.index', $this->getCurrentRelation()).'">return</a> <a href="'.\URL::route($this->getCurrentController().'.create', $this->getCurrentRelation() ).'">create new</a>' );
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
	 * @return Response
	 */
	public function show( $reId, $id ) {
		//
        return \View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->show($id))->with('id', $id);
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
        return \View::make('Admin::'.strtolower( $this->modelName()) )->with('item', $this->dataApi()->show($id))->with('id', $id);
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
		if ( $this->validPass( $process = $this->dataApi()->update( $id, \Input::except( '_token', '_method' ) ) ) ) {
			return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="' . \URL::route( $this->getCurrentController() . '.index', $this->getCurrentRelation() ) . '">return</a> <a href="' . \URL::route( $this->getCurrentController() . '.edit', $this->getCurrentRelation() + array( 'id' => $id ) ) . '">edit again</a>' );
		}
		if ( ! $process ) {
			$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
		}

		return \View::make( 'Admin::' . strtolower( $this->modelName() ) )->with( 'item', $this->dataApi()->edit( $id ) )->with( 'id', $id )->withInput( \Input::except( '_token', '_method' ) )->withErrors( $process );
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
        var_dump( 'destroy' . $id );
	}

	/**
	 * 批量操作
	 *
	 * @return Response
	 */
	public function batch( $reId, $reqAll ) {
        foreach($reqAll as $index => $req){
            if ( $this->validPass( $process[$index] = call_user_func_array(array($this->dataApi(), $req['method']), array_except($req, 'method')) ) ) {

            }
            if ( ! $process[$index] ) {
                $process[$index] = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
            }
        }
	}

	protected function modelName() {
		return ucfirst( explode( '_', snake_case( class_basename( get_class( $this ) ) ) )[1] );  // substr( strrchr( get_class( $this ), '\\' ), 1, - 10 ); //
	}

	protected function dataApi( $model = null ) {
		$controller = 'App\Modules\Data\Controllers\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller )->initRelation( $this->getCurrentRelation() ) : false;
	}

	protected function getCurrentController() {
		return str_replace('_', '.', snake_case(substr( strrchr( get_class( $this ), '\\' ), 1, - 10 ))); //strstr( trim( strstr( Route::currentRouteName(), '.' ), '.' ), '.', true );
	}

	protected function getCurrentAction() {
		return substr( strrchr( \Route::currentRouteName(), '.' ), 1 );
	}
}
