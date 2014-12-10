<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/9
 * Time: 16:53
 */

namespace App\External\Article\Controllers;

class ArticleController extends \BaseController {

	public function index(){
		return View::make('Article::index');
	}

	public function show( $id )
	{
		//
		return View::make('Article::show')->with(array('id' => $id));
	}
}
