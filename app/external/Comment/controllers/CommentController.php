<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/11
 * Time: 9:31
 */

namespace App\External\Comment\Controllers;

class CommentController extends \BaseController {

	public function index(){
		return \View::make('Comment::index');
	}

	public function create(){

	}
}
