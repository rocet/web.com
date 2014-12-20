<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/17
 * Time: 20:05
 */

namespace App\External\Comment\Controllers\Member;

use App\External\Member\Controllers\MemberController;

class CommentController extends MemberController{
    protected function getCurrentComponent(){
        return 'Comment';
    }

}