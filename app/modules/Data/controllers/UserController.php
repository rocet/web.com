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
		return $this->validate(function () use ($input) {
			$input['password'] = \Hash::make($input['password']);
			unset($input['password_confirm']);
			if ($user = $this->model()->firstOrCreate($input)) {
				$user->groups()->attach(2);
				\Auth::login($user);
				return $user;
			}
			return 0;
		}, $input, 0);
	}

	public function validate(\Closure $callback, $input, $exists = 1)
	{
		$valid = array(
			'email' => 'required|email|' . ($exists ? 'exists' : 'unique') . ':user,email',
			'mobile' => 'required|numeric|min:11|' . ($exists ? 'exists' : 'unique') . ':user,mobile',
			'user_name' => 'required|min:5|' . ($exists ? 'exists' : 'unique') . ':user,user_name',
			'region' => 'required|numeric',
			'password' => 'required|'. (isset($input['password_old']) ? 'different:password_old|' : '') .'min:5',
			'password_confirm' => 'required|same:password',
			'password_old' => 'required|min:5',
			'token' => 'required|exists:token,token'
		);

		$valid = \Validator::make($input, array_intersect_key($valid, $input));
		if ($valid->passes()) {
			return $callback();
		}
		return $valid;
	}

	public function login($input, $remember = false)
	{
		return $this->validate(function () use ($input, $remember) {
			return \Auth::attempt($input, $remember);
		}, $input);
	}

	public function reminder($input)
	{
		return $this->validate(function () use ($input) {
			return \Password::remind($input, function ($message, $user) {
				// TODO: send token email
				$message->subject("chris@example.com Password Reminder");
				return 1;
			});
		}, $input);
	}

	public function reset($input)
	{
		return $this->validate(function () use ($input) {
			return \Password::reset($input, function ($user, $password) {
				$user->password = \Hash::make($password);
				$user->save();
				\Auth::login($user);
				return 1;
			});
		}, $input);
	}

	public function changePassword($input)
	{
		return $this->validate(function () use ($input) {
			$user = Auth::user();
			$user->password = Hash::make($input['password']);
			$user->save();
			\Auth::logout();
			\Auth::login($user);
			return 1;
		}, $input);
	}
}
