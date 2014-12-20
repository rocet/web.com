<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/17
 * Time: 21:11
 */

namespace App\External\Media\Controllers\Member;

use App\External\Member\Controllers\MemberController;

class MediaController extends MemberController {

    protected function getCurrentComponent(){
        return 'Media';
    }
}