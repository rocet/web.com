<?php
namespace App\Modules\Data\Controllers;

class OrgnazeController extends InitController {

	public function validate( \Closure $callback, $input, $exists = 1 ) {
		$valid = array(
			'pid'          => 'required|numeric|exists:orgnaze,pid',
			'orgnaze_name' => 'required|min:5|' . ( $exists ? 'exists' : 'unique' ) . ':orgnaze,orgnaze_name',
			'region_id'    => 'required|numeric|exists:region,pid',
			'user_id'      => 'required|numeric|exists:user,id',
			'sort'         => 'required|numeric',
		);
		$valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(
			'pid'          => Lang::get( 'orgnaze.pid' ),
			'orgnaze_name' => Lang::get( 'orgnaze.orgnaze_name' ),
			'region_id'    => Lang::get( 'orgnaze.region_id' ),
			'user_id'      => Lang::get( 'orgnaze.user_id' ),
			'sort'         => Lang::get( 'orgnaze.sort' )
		) );
		if ( $valid->passes() ) {
			return $callback();
		}

		return $valid;
	}
}
