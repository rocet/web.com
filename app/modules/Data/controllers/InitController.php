<?php
namespace App\Modules\Data\Controllers;
class InitController extends \Controller 
{
	/**
	 * 模型名称
	 *
	 * @return Response
	 */
	protected function modelName(){
		$modelName = substr(strrchr(get_class($this), '\\'), 1, -10);
		$relation = explode('_', snake_case($modelName));
		return $modelName == $relation[0] ? $modelName : ucfirst(end($relation));
	}


	/**
	 * 关系模型名称
	 *
	 * @return Response
	 */
	protected function relationModelNames(){
		$relations = explode('_', snake_case(substr(strrchr(get_class($this), '\\'), 1, -10)));
		array_pop( $relations );
		return $relations;
	}


	/**
	 * 分页条数
	 *
	 * @return Response
	 */
	protected function perPageNum(){
		$pageNum = Config::get('Data::common.per_page.'.strtolower($this->modelName()));
		return $pageNum ?: Config::get('Data::common.per_page.default');
	}


	/**
	 * 搜索条件
	 *
	 * @return Response
	 */
	protected function serch(){
		$serch = Input::request('serch');
		return $serch;
	}


	/**
	 * 首页
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->paginate();
	}


	/**
	 * 分页数据
	 *
	 * @return Response
	 */
	public function paginate($page = 0)
	{
		return call_user_func("\\".$this->modelName()."::paginate", $this->perPageNum());
	}


	/**
	 * 创建界面
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return __METHOD__;
	}


	/**
	 * 添加记录
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		return __METHOD__;
	}


	/**
	 * 单条记录
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return call_user_func("\\".$this->modelName()."::find", $id);
	}


	/**
	 * 修改界面
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return __METHOD__;
	}


	/**
	 * 保存修改
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		return __METHOD__;
	}


	/**
	 * 删除记录
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		return __METHOD__;
	}


	/**
	 * 下拉列表
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function selections($id = 0)
	{
		//
		return __METHOD__;
	}
}