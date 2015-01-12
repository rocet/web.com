<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:22
 */

namespace App\External\Tag\Controllers\Admin;

use App\Modules\Admin\Controllers\AdminController;

class TagController extends AdminController {

	protected function getCurrentComponent(){
		return 'Tag';
	}

	protected function tpl(){
		return $this->getCurrentComponent() . '::admin.' . strtolower( $this->modelName() );
	}

	protected function dataApi( $model = null ) {
		$controller = 'App\External\Tag\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}
}