<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 17:22
 */

namespace App\External\Article\Controllers\Admin;

class CategoryController extends \BaseController {

	public function index(){
		return \View::make('Article::admin.category');
	}
}