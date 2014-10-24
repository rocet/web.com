<?php
namespace App\Modules\Data\Controllers;
class UserController extends InitController
{
	public function account($account)
	{
		$mobile_code = array(134, 135, 136, 137, 138, 139, 150, 151, 152, 157, 158, 159, 182, 183, 184, 187, 188, 178, 147, 130, 131, 132, 155, 156, 185, 186, 176, 145, 133, 153, 180, 181, 189, 177, 170);
		if (filter_var($account, FILTER_VALIDATE_EMAIL)) {
			$account = 'email';
		} else if ($account + 0 && $account + 0 > 13000000000 && $account + 0 < 19000000000 && in_array(intval(substr($account, 0, 3)), $mobile_code)) {
			$account = 'mobile';
		} else {
			$account = 'user_name';
		}
		return $account;
	}

	public function register($input)
	{
		return $this->validate(function ($args) {
			$args[0]['password'] = \Hash::make($args[0]['password']);
			unset($args[0]['password_confirm']);
			if ($user = $this->model()->firstOrCreate($args[0])) {
				$user->groups()->attach(2);
				$this->login($args[0]);
				return $user;
			}
			return 0;
		}, array($input), $input);
	}

	public function validate(\Closure $callback, array $args, $input, $exists = 0)
	{
		$valid = array(
			'email' => 'required|email|' . ($exists ? 'exists' : 'unique') . ':user,email',
			'mobile' => 'required|numeric|min:11|' . ($exists ? 'exists' : 'unique') . ':user,mobile',
			'user_name' => 'required|min:5|' . ($exists ? 'exists' : 'unique') . ':user,user_name',
			'region' => 'required|numeric',
			'password' => 'required|min:5',
			'password_confirm' => 'required|same:password',
			'token' => 'required|exists:token,token'
		);
		$valid = \Validator::make($input, array_intersect_key($valid, $input));
		if ($valid->passes()) {
			return $callback($args);
		}
		return $valid;
	}

	public function login($input, $remember = false)
	{
		return $this->validate(function ($args) {
			return \Auth::attempt($args[0], $args[1]);
		}, array($input, $remember), $input, 1);
	}
}
