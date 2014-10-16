<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	use UserTrait, RemindableTrait;
	protected $table = 'user';
	protected $hidden = array('password');
	protected $fillable = array('user_name', 'password', 'email', 'mobile', 'region_id', 'orgnaze_id', 'state', 'remember_token');

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function group()
	{
		return $this->belongsTo("Group");
	}

	public function groups()
	{
		return $this->belongsToMany("Group")->withTimestamps();
	}

	public function orgnaze()
	{
		return $this->belongsTo('Orgnaze');
	}

	public function orgnazes()
	{
		return $this->belongsToMany("Orgnaze")->withTimestamps();
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function validate(Closure $callback, array $args, $input, $exists = 0)
	{
		$valid = array(
			"email" => "required|email|" . ($exists ? "exists" : "unique") . ":user,email",
			"mobile" => "required|numeric|min:11|" . ($exists ? "exists" : "unique") . ":user,mobile",
			"user_name" => "required|min:5|" . ($exists ? "exists" : "unique") . ":user,user_name",
			"region" => "required|numeric",
			"password" => "required|min:6",
			"password_confirmation" => "required|same:password",
			"token" => "required|exists:token,token"
		);
		$valid = Validator::make($input, $valid);
		if ($valid->passes()) {
			$callback($args);
		}
		return $valid;
	}

	public function register($input)
	{
		return $this->validate(function ($args) {
			return $this->firstOrCreate($args[0]);
		}, array($input), $input, 1);
	}

	public function login($input, $remember = false)
	{
		return $this->validate(function ($args) {
			return Auth::attempt($args[0], $args[1]);
		}, array($input, $remember), $input, 1);
	}

	public function account($account)
	{
		if (filter_var($account, FILTER_VALIDATE_EMAIL)) {
			$account = 'email';
		} else if ($account + 0 && $account + 0 > 10000000000 && in_array(intval(substr($account, 0, 3)), array(134, 135, 136, 137, 138, 139, 150, 151, 152, 157, 158, 159, 182, 183, 184, 187, 188, 178, 147, 130, 131, 132, 155, 156, 185, 186, 176, 145, 133, 153, 180, 181, 189, 177, 170))) {
			$account = 'mobile';
		} else {
			$account = 'user_name';
		}
		return $account;
	}
}