<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 17:22
 */

namespace App\External\Article\Controllers\Admin;

use App\Modules\Admin\Controllers\AdminController;

class InitController extends AdminController {
	protected function getCurrentComponent(){
		return 'Article';
	}

	protected function tpl(){
		return $this->getCurrentComponent() . '::admin.' . strtolower( $this->modelName() );
	}

}
