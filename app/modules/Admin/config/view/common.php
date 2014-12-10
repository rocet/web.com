<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/10
 * Time: 17:09
 */

return array(
	'menus' => array(
		'admin' => array(
			array('flag' => 'admin', 'title' => Lang::get( 'Admin::common.admin' ), 'link' => URL::route( 'admin' ) ),
			array('flag' => 'user', 'title' => Lang::get( 'Admin::common.user' ), 'link' => URL::route( 'user.index' ) ),
			array('flag' => 'group', 'title' => Lang::get( 'Admin::common.group' ), 'link' => URL::route( 'group.index' ) ),
			array('flag' => 'rule', 'title' => Lang::get( 'Admin::common.rule' ), 'link' => URL::route( 'rule.index' ) ),
			array('flag' => 'organization', 'title' => Lang::get( 'Admin::common.organization' ), 'link' => URL::route( 'organization.index' ) ),
			array('flag' => 'resource', 'title' => Lang::get( 'Admin::common.resource' ), 'link' => URL::route( 'resource.index' ) ),
			array('flag' => 'component', 'title' => Lang::get( 'Admin::common.component' ), 'link' => URL::route( 'component.index' ) ),
			array('flag' => 'menu', 'title' => Lang::get( 'Admin::common.menu' ), 'link' => URL::route( 'menu.index' ) ),
		),
	),
);