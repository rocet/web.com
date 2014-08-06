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
	protected $fillable = array('user_name', 'password', 'email', 'mobile', 'region_id', 'orgnaze_id', 'state' );
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

	public static function validate($input)
	{
		$validate = array(
			'user_name' => 'unique:user',
			'mobile' => 'unique:user',
			'email' => 'unique:user'
		);
		return Validator::make( $input, $validate );
	}

	public static function register($input)
	{
		$valid = static::validate( $input );
		if( $valid->passes() ){
			// return \User::firstOrNew( $input );
			return static::firstOrCreate( $input );
		} else {
			return $valid;
		}
	}
}
