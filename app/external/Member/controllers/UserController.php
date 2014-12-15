<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/15
 * Time: 9:56
 */

namespace App\External\Member\Controllers;


class UserController extends \BaseController {
	public function index( ){
		return \View::make('Member::index');
	}
	public function show( $id )
	{
		//
		return \View::make('Member::show')->with(array('item' => $this->dataApi()->showWithRelate( $id, array('organization','region','group') ) ));
	}
	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function dataApi( $model = '' ) {
		$controller = 'App\Modules\Data\Controllers\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
}