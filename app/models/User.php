<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
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

    public static function validate($input)
    {
        return Validator::make($input, array(
            'user_name' => 'unique:user',
            'mobile' => 'unique:user',
            'email' => 'unique:user'
        ));
    }

    public static function register($input)
    {
        $valid = static::validate( $input );
        if( $valid->passes() ){
            return static::firstOrCreate( $input );
        } else {
            return $valid;
        }
    }

    public static function login($input, $remember)
    {
        return Auth::attempt($input, $remember);
    }

    public static function accountType($account){
        if( filter_var($account, FILTER_VALIDATE_EMAIL) ){
            $account = 'email';
        } else if( $account + 0 && $account + 0 > 10000000000 && in_array(intval(substr($account, 0, 3)), array(134,135,136,137,138,139,150,151,152,157,158,159,182,183,184,187,188,178,147,130,131,132,155,156,185,186,176,145,133,153,180,181,189 ,177,170))){
            /*移动：134、135、136、137、138、139、150、151、152、157、158、159、182、183、184、187、188、178(4G)、147(上网卡)
            联通：130、131、132、155、156、185、186、176(4G)、145(上网卡)
            电信：133、153、180、181、189 、177(4G)
            卫星通信：1349
            虚拟运营商：170filter_var($account, FILTER_SANITIZE_NUMBER_INT)  +xx-xxxx-xxxxx*/
            $account = 'mobile';
        } else {
            $account = 'user_name';
        }
        return $account;
    }
}