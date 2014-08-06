<?php
namespace App\Modules\Api\Controllers;
class UserController extends ApiController
{
	public function validateError(array $input = array())
	{
		return $this->validError( \User::validate( $this->parseParame($input) ) );
	}
	public function register(array $input = array())
	{
		$processed = \User::register( $this->parseParame($input) );
		return 'User' == get_class($processed) ? $processed : $this->validError( $processed );
	}
	public function formLogin(array $input = array())
	{
		if (Auth::validate($this->parseParame($input)))
		{
			Auth::logout();
			Auth::login(\User::find(2));
			return Auth::user()->toArray();
		}
		if (Auth::once($this->parseParame($input)))
		{
			Auth::logout();
			Auth::loginUsingId(\User::find(2)->id);
			$group = \Group::find(1);
			return $group->users->toArray();
		}
		if (Auth::attempt($this->parseParame($input), true))
		{
			var_dump( Auth::check(), Auth::viaRemember() );
		}
	}
	public function logout()
	{
		Auth::logout();
	}
	public function verifyPic()
	{

	}
	public function verifyCode()
	{
		Crypt::decrypt(Crypt::encrypt('secret'));
	}
	public function passwordReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);
			$user->save();
		});
		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				return $this->error(array('password' => Lang::get($response)));
			case Password::PASSWORD_RESET:
				return array('password' =>  Lang::get($response));
		}
	}
	public function emailPassword()
	{
		switch ($response = Password::remind(Input::only('email')))
		{
			case Password::INVALID_USER:
				return $this->error(array('email' => Lang::get($response)));
			case Password::REMINDER_SENT:
				return array('email' =>  Lang::get($response));
		}
	}
	public function phonePassword()
	{
		
	}
}