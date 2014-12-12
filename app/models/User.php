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
	protected $fillable = array('user_name', 'password', 'email', 'mobile', 'region_id', 'organization_id', 'state', 'remember_token');

    public function group()
    {
        return $this->belongsTo('Group');
    }

	public function region()
	{
		return $this->belongsTo('Region');
	}

    public function organization()
    {
        return $this->belongsTo('Organization');
    }

	public function groups()
	{
		return $this->belongsToMany('Group')->withTimestamps();
	}

	public function resources()
	{
		return $this->belongsToMany('Resource')->withTimestamps();
	}

	public function Organizations()
	{
		return $this->belongsToMany('Organization')->withTimestamps();
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