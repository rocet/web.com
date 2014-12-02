<?php
namespace App\Modules\Data\Controllers;

class GroupController extends TreeController {

	public function validate( \Closure $callback, $input, $id = 0 ) {
		$valid = array(
			"id"         => 'notin:1,2|exists:group,id',
			'pid'        => 'required|numeric|',
			'group_name' => 'required|unique:group,group_name' . ( $id ? ','.$id : '' ),
			'user_id'    => 'required|numeric|exists:user,id',
			'sort'       => 'required|numeric'
		);
		$valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(
			'id'         => Lang::get( 'group.id' ),
			'pid'        => Lang::get( 'group.pid' ),
			'group_name' => Lang::get( 'group.group_name' ),
			'user_id'    => Lang::get( 'group.user_id' ),
			'sort'       => Lang::get( 'group.sort' )
		) );
		if ( $valid->passes() ) {
			return $callback();
		}

		return $valid;
	}
}
