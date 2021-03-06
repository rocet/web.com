<?php
namespace App\Modules\Api\Controllers;
class ApiController extends \BaseController
{
	public function __construct()
	{

	}

	protected function modelName()
	{
		return substr(strrchr(get_class($this), '\\'), 1, -10);
	}

	protected function error(array $error = array())
	{
		return array('errors' => $error);
	}

	protected function dataApi($model = null)
	{
		$controller = 'App\Modules\Data\Controllers\\' . ($model ?: $this->modelName()) . 'Controller';
		return class_exists($controller) ? App::make($controller) : false;
	}

	public function validError($valid)
	{
		return $valid->passes() ? $valid->errors() : array('errors' => $valid->errors());
	}

	public function parseParame($input)
	{
		$input = empty($input) && Request::method() == 'POST' ? Input::all() : $input;
		if (isset($input['password_confirmation'])) {
			if ($input['password_confirmation'] !== $input['password']) {
				return array();
			}
		}
		return $input;
	}

	public function paginate($page = 0)
	{
		$page = $page ? $page : Input::get('page');
		if (!class_exists("\\" . $this->modelName())) {
			return $this->error(array('model' => '参数错误~!'));
		}
		return call_user_func("\\" . $this->modelName() . "::paginate", $page);
	}

	public function getOne($id = 0)
	{
		$id = $id ? $id : Input::get('id');
		if (!$id) {
			return $this->error(array('id' => '参数错误~!'));
		}
		if (!class_exists("\\" . $this->modelName())) {
			return $this->error(array('model' => '参数错误~!'));
		}
		return call_user_func("\\" . $this->modelName() . "::find", $id);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return Response::json($this->dataApi()->index());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return Response::json($this->dataApi()->create());
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		return Response::json($this->dataApi()->store());
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
		return Response::json($this->dataApi()->show($id));
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
		return Response::json($this->dataApi()->edit($id));
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
		return Response::json($this->dataApi()->update($id));
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
		return Response::json($this->dataApi()->destroy($id));
	}


	public function selections($pid = 0)
	{
		return Response::json($this->dataApi()->selections($pid));
	}
}
