<?php
namespace App\Modules\Data\Controllers;
class UserController extends InitController
{
    public function login($input, $remember = false){
        return call_user_func("\\".$this->modelName()."::login", array($input, $remember));
    }

    public function register($input){
        $input['password'] = Hash::make($input['password']);
        if( $user = call_user_func("\\".$this->modelName()."::register", $input) ) {
            $user->group()->attach(2);
            $this->login($input);
            return $user;
        }
        return false;
    }
}
