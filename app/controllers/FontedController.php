<?php

class FontedController extends BaseController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected function dataApi($model = null)
	{
		$controller = 'App\Modules\Data\Controllers\\' . ($model ?: $this->modelName()) . 'Controller';
		return class_exists($controller) ? App::make($controller) : false;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function loginWithFrontValid()
	{
		$form = new UserForm();
		$data = array("errors" => $form->getErrors());
		if ($form->isPosted()) {
			$account = User::account(Input::get('account'));
			if ($form->isValidForLogin($account)) {
				if ($this->dataApi('User')->login(array(
					$account => Input::get('account'),
					'password' => Input::get('password')
				), Input::has('remember'))
				) {
					return Redirect::to('/');
				}
				$data["errors"] = new MessageBag(array("password" => array(Lang::get('user.logerror'))));
				$data[$account] = Input::get("account");
				return Redirect::guest('login')->withInput($data);
			}
		}
		return Redirect::guest('login');
	}

	public function registerWithFrontValid()
	{
		$form = new UserForm();
		$data = array("errors" => $form->getErrors());
		if ($form->isPosted()) {
			$account = User::account(Input::get('account'));
			if ($form->isValidForRegist($account)) {
				if ($this->dataApi('User')->register(array(
					$account => Input::get('account'),
					'password' => Input::get('password')
				))
				) {
					return Redirect::to('/');
				}
				$data["errors"] = $form->getErrors();
				$data[$account] = Input::get("account");
				return Redirect::guest('login')->withInput($data);
			}
		}
		return Redirect::guest('register');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		if (Request::isMethod('post')) {
			$account = User::account(Input::get('account'));
			$posts = array(
				$account => Input::get('account'),
				'password' => Input::get('password')
			);
			if ($this->dataApi('User')->login($posts, Input::has('remember'))) {
				return Redirect::to('/');
			}
			$data["errors"] = new MessageBag(array("password" => array(Lang::get('user.logerror'))));
			$data[$account] = Input::get("account");
			return Redirect::guest('login')->withInput($data);
		}
		return Redirect::guest('login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function register()
	{
		if (Request::isMethod('post')) {
			$account = User::account(Input::get('account'));
			$posts = array(
				$account => Input::get('account'),
				'password' => Input::get('password')
			);
			if ($this->dataApi('User')->register($posts)) {
				return Redirect::to('/');
			}
			$data["errors"] = new MessageBag(array("password" => array(Lang::get('user.logerror'))));
			$data[$account] = Input::get("account");
			return Redirect::guest('register')->withInput($data);
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
