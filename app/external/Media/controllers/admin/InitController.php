<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 17:22
 */

namespace App\External\Media\Controllers\Admin;

use App\Modules\Admin\Controllers\AdminController;

class InitController extends AdminController {
	protected function getCurrentComponent(){
		return 'Media';
	}

	protected function tpl(){
		return $this->getCurrentComponent() . '::admin.' . strtolower( $this->modelName() );
	}

	protected function dataApi( $model = null ) {
		$controller = 'App\External\Media\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
}
