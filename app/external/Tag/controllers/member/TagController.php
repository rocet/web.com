<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:24
 */

namespace App\External\Tag\Controllers\Member;

use App\External\Member\Controllers\MemberController;

class TagController extends MemberController{
	protected function getCurrentComponent(){
		return 'Tag';
	}

}