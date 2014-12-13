<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 17:22
 */

namespace App\External\Comment\Controllers\Admin;

use App\Modules\Admin\Controllers\AdminController;

class InitController extends AdminController {
	protected function getCurrentComponent(){
		return 'Comment';
	}

	protected function tpl(){
		return $this->getCurrentComponent() . '::admin.' . strtolower( $this->modelName() );
	}

}
