<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

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

}
