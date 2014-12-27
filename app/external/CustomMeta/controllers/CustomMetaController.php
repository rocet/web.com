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
			$attributes = array();
			foreach(\Input::get('attributes') as $key => $attr){
				$attributes[$key] = is_array($attr) ? array_filter($attr, function($val){ return $val === '' ? false : true; }) : $attr ;
			}
			if( is_array( \Input::get('attributes.value') ) ){
				$ret .= '<span>';
				foreach( \Input::get('attributes.value') as $key => $val ){
					$attributes['value'] = $val;
					$attributes['checked'] = $key == $attributes['checked'] ? true : false ;
					$ret .= call_user_func_array('\Form::'.\Input::get('type'), $attributes);
					$ret .= $key;
				}
				$ret .= '</span>';
			} else {
				$ret = call_user_func_array('\Form::'.\Input::get('type'), $attributes);
			}
			return $ret;
		}
		return \View::make('CustomMeta::show');
	}
}