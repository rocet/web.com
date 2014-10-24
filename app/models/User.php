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
		return $this->belongsTo('Group');
	}

	public function groups()
	{
		return $this->belongsToMany('Group')->withTimestamps();
	}

	public function orgnaze()
	{
		return $this->belongsTo('Orgnaze');
	}

	public function orgnazes()
	{
		return $this->belongsToMany('Orgnaze')->withTimestamps();
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

}