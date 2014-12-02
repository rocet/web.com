<?php
namespace App\Modules\Data\Controllers;

class ResourceController extends TreeController {

	public function validate( \Closure $callback, $input, $id = 0 ) {
		$valid = array(
			'pid'           => 'required|numeric|',
			'resource_name' => 'required|unique:resource,resource_name' . ( $id ? ','.$id : '' ),
			'user_id'       => 'required|numeric|exists:user,id'
		);
		$valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(
			'pid'           => Lang::get( 'resource.pid' ),
			'resource_name' => Lang::get( 'resource.resource_name' ),
			'user_id'       => Lang::get( 'resource.user_id' )
		) );
		if ( $valid->passes() ) {
			return $callback();
		}

		return $valid;
	}
}
