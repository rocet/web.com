<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/23
 * Time: 11:03
 */

namespace App\External\CustomMeta\Controllers;


class CustomMetaController extends \BaseController {

	public function show(){
		if( \Input::method() == 'POST' ){
			return \Input::except('_token');
		}
		return \View::make('CustomMeta::show');
	}
}