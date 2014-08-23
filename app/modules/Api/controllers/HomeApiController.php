<?php
namespace App\Modules\Api\Controllers;
class HomeApiController extends ApiController 
{
	public function showWelcome()
	{
		// if (Auth::validate(array('email' => 'admin@admin.com', 'password' => 'admin1')))
		// {
		// 	Auth::logout();
		// 	Auth::login(\User::find(2));
		// 	return Auth::user()->toArray();
		// }
		// if (Auth::once(array('email' => 'admin@admin.com', 'password' => 'admin2')))
		// {
		// 	Auth::logout();
		// 	Auth::loginUsingId(\User::find(2)->id);
		// 	$group = \Group::find(1);
		// 	return $group->users->toArray() ;
		// }
		if (Auth::attempt(array('email' => 'admin@admin.com', 'password' => 'admin'), true))
		{
			// var_dump( Auth::check(), Auth::viaRemember() );
			// var_dump( Crypt::decrypt(Crypt::encrypt('secret')) );
			// if(!\Group::root()) {
			// 	\Group::create(array( 'group_name' => '系统管理员' ));
			// }

			// $groups = new \Group;
			// return $groups->selectOptions();

			// $user = new \User();
			// var_dump( $user->exists );

			$input = array(
				'user_name'   => 'rocetk',
				'password'    => Hash::make('rocetk'),
				'email'       => 'rocetk@qq.com',
				'mobile'      => '13558616654',
				'region_id'   => 410302,
				'orgnaze_id'  => 1,
				'state'       => 1,
			);

			\User::register( $input );

			// $user = \User::firstOrNew(array('user_name' => 'rocetk', 'email'=>'rocetk@qq.com', 'mobile' => '13558616654'));	
			// $user->user_name   = 'rocetk';
			// $user->password    = Hash::make('rocetk');
			// $user->email       = 'rocetk@qq.com';
			// $user->mobile      = '13558616654';
			// $user->region_id   = '410302';
			// $user->orgnaze_id  = '1';
			// $user->state       = '1';
			// var_dump( $user->save(), \User::all()->toArray() );
			// \User::all()->last()->delete();
			return \User::all()->toArray();

			return View::make('Admin::admin');
			// return \Group::roots()->paginate()->toArray();
			// return \Group::whereNull('pid')->get();
			// return \Group::roots()->first()->toArray();
			// return \User::all()->toArray();
		}
	}
}
