<?php

class FontedController extends BaseController
{

	public function index()
	{
		//
	}

	public function login()
	{
		if (Request::isMethod('post')) {
			$account = $this->dataApi('User')->account(Input::get('account'));
			$posts = array(
				$account => Input::get('account'),
				'password' => Input::get('password')
			);
			if ($this->validPass($process = $this->dataApi('User')->login($posts, Input::has('remember')))) {
				return Redirect::to('/');
			}
			if($process){
				$process->errors()->add('account', $process->errors()->first($account) );
			} else {
				$process = new \Illuminate\Support\MessageBag(array('sys_error'=>'error'));
			}
			return Redirect::guest('login')->withErrors($process)->withInput(array('account'=>Input::get('account')));
		}
		return Redirect::guest('login');
	}

	protected function dataApi($model = null)
	{
		$controller = 'App\Modules\Data\Controllers\\' . ($model ?: $this->modelName()) . 'Controller';
		return class_exists($controller) ? App::make($controller) : false;
	}

	public function register()
	{
		if (Request::isMethod('post')) {
			$account = $this->dataApi('User')->account(Input::get('account'));
			$posts = array(
				$account => Input::get('account'),
				'password' => Input::get('password'),
				'password_confirm' => Input::get('password_confirm')
			);
			if ($this->validPass($process = $this->dataApi('User')->register($posts))) {
				return Redirect::to('/');
			}
			if($process){
				$process->errors()->add('account', $process->errors()->first($account) );
			} else {
				$process = new \Illuminate\Support\MessageBag(array('sys_error'=>'error'));
			}
			return Redirect::guest('register')->withErrors($process)->withInput(array('account'=>Input::get('account')));
		}
		return Redirect::guest('register');
	}


	public function changePassword()
	{

	}

	public function forgetPassword()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
