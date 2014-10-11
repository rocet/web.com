<?php

class FontedController extends BaseController {

    protected function dataApi($model = null){
        $controller = 'App\Modules\Data\Controllers\\'.($model ?: $this->modelName()).'Controller';
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
    public function login()
    {
        if ($this->dataApi('User')->login(array(
            User::accountType(Input::get('account')) => Input::get('account'),
            'password' => Input::get('password')
        ), Input::has('remember'))) {
            return Redirect::to('/');
        }
        return Redirect::guest('login');
    }

    public function register(){
        if ($this->dataApi('User')->register(array(
            User::accountType(Input::get('account')) => Input::get('account'),
            'password' => Input::get('password')
        ))) {
            return Redirect::to('/');
        }
        return Redirect::guest('register');
    }

    public function changePassword(){

    }

    public function forgetPassword(){

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
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
