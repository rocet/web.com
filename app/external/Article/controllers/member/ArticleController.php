<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/15
 * Time: 10:53
 */

namespace App\External\Article\Controllers\Member;

use App\External\Member\Controllers\MemberController;

class ArticleController extends MemberController {

	protected function getCurrentComponent(){
		return 'Article';
	}

}