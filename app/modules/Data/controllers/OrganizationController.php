<?php
namespace App\Modules\Data\Controllers;

class OrganizationController extends TreeController {

	public function validate( \Closure $callback, $input, $id = 0 ) {
		$valid = array(
			'pid'               => 'required|numeric|', // . ( $exists ? 'exists:organization,pid' : '' ),
			'organization_name' => 'required|min:2|unique:organization,organization_name' . ( $id ? ','.$id : '' ),
			'region_id'         => 'required|numeric|exists:region,id',
			'user_id'           => 'required|numeric|exists:user,id',
			'sort'              => 'required|numeric',
		);
		$valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(
			'pid'               => Lang::get( 'organization.pid' ),
			'organization_name' => Lang::get( 'organization.organization_name' ),
			'region_id'         => Lang::get( 'organization.region_id' ),
			'user_id'           => Lang::get( 'organization.user_id' ),
			'sort'              => Lang::get( 'organization.sort' )
		) );
		if ( $valid->passes() ) {
			return $callback();
		}

		return $valid;
	}

}
