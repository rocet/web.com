<?php
namespace App\Modules\Api\Controllers;
class CommonController extends ApiController
{
	public function selections($pid = 0, $fields = array())
	{
		$pid = intval($pid);
		if (!$pid) {
			return \Region::whereRaw('pid = ?', array(0))->get($fields);
		} else {
			return \Region::whereRaw('pid = ?', array($pid))->get($fields);
		}
	}

	public function showWelcome()
	{
		// var_dump( Crypt::decrypt(Crypt::encrypt('secret')) );
		// if(!\Group::root()) {
		// 	\Group::create(array( 'group_name' => '系统管理员' ));
		// }

		// $groups = new \Group;
		// return $groups->selectOptions();

		// $user = new \User();
		// var_dump( $user->exists );

		// $input = array(
		// 	'user_name'   => 'rocetke',
		// 	'password'    => Hash::make('rocetk'),
		// 	'email'       => 'rocetke@qq.com',
		// 	'mobile'      => '135586166540',
		// 	'region_id'   => 410302,
		// 	'orgnaze_id'  => 1,
		// 	'state'       => 1,
		// );
		// return \User::validate( $input )->errors();
		// \User::register( $input );

		// $user = \User::firstOrNew(array(
		// 	'user_name' => 'rocetk', 
		// 	'email'=>'rocetk@qq.com', 
		// 	'mobile' => '13558616654'
		// ));	
		// $user->user_name   = 'rocetk';
		// $user->password    = Hash::make('rocetk');
		// $user->email       = 'rocetk@qq.com';
		// $user->mobile      = '13558616654';
		// $user->region_id   = '410302';
		// $user->orgnaze_id  = '1';
		// $user->state       = '1';
		// var_dump( $user->save(), \User::all()->toArray() );
		// \User::all()->last()->delete();
		// return \User::all()->toArray();
		// return \Group::roots()->paginate()->toArray();
		// return \Group::whereNull('pid')->get();
		// return \Group::roots()->first()->toArray();
		// return \User::all()->toArray();

		return View::make('Admin::admin');
	}
}
