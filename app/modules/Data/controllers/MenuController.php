<?php
namespace App\Modules\Data\Controllers;

class MenuController extends TreeController {

	public function validate( \Closure $callback, $input, $id = 0 ) {
		$valid = array(

		);
		$valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(

		) );
		if ( $valid->passes() ) {
			return $callback();
		}

		return $valid;
	}
}
