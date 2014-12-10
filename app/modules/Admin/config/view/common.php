<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/10
 * Time: 17:09
 */

return array(
	'menus' => array(
		'systemManager' => array(
			array( 'title' => Lang::get( 'Admin::common.admin' ), 'link' => URL::route( 'admin' ) ),
			array( 'title' => Lang::get( 'Admin::common.user' ), 'link' => URL::route( 'user.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.group' ), 'link' => URL::route( 'group.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.rule' ), 'link' => URL::route( 'rule.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.organization' ), 'link' => URL::route( 'organization.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.resource' ), 'link' => URL::route( 'resource.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.component' ), 'link' => URL::route( 'component.index' ) ),
			array( 'title' => Lang::get( 'Admin::common.menu' ), 'link' => URL::route( 'menu.index' ) ),
		),
	),
);