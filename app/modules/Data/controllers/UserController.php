<?php
namespace App\Modules\Data\Controllers;
class UserController extends InitController
{
    public function login($input, $remember){
        return call_user_func("\\".$this->modelName()."::login", array($input, $remember));
    }

    public function register($input){
        $password = Hash::make($input['password']);
        unset($input['password']);
        $account = current($input);
//        return call_user_func("\\".$this->modelName()."::register", array('password' => $password));
//
//        $user->groups()->attach(2);
//        return Auth::login($user);
    }
}
