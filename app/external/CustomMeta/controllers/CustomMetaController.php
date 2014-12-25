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
			$ret = '';
			if( is_array( \Input::get('attributes.value') ) ){
				$attributes = \Input::get('attributes');
				$ret .= '<span>';
				foreach( \Input::get('attributes.value') as $key => $val ){
					$attributes['value'] = $val;
					$attributes['checked'] = $key == $attributes['checked'] ? true : false ;
					$ret .= call_user_func_array('\Form::'.\Input::get('type'), $attributes);
					$ret .= $key;
				}
				$ret .= '</span>';
			} else {
				$ret = call_user_func_array('\Form::'.\Input::get('type'), \Input::get('attributes'));
			}
			return $ret;
		}
		return \View::make('CustomMeta::show');
	}
}