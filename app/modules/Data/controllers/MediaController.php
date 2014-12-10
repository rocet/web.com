<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/9
 * Time: 22:15
 */

namespace App\Modules\Data\Controllers;


class MediaController extends InitController {

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
