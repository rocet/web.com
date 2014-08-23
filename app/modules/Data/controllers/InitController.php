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
		return substr(strrchr(get_class($this), '\\'), 1, -10);
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
		return $this->paginate()->toArray();
	}


	/**
	 * 分页数据
	 *
	 * @return Response
	 */
	public function paginate()
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
	public function show($id=null)
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
	public function edit($id=null)
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
	public function update($id=null)
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
	public function destroy($id=null)
	{
		//
		return call_user_func("\\".$this->modelName()."::delete", $id);
	}


	/**
	 * 下拉列表
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function selections($id=null)
	{
		//,
		$fields = Input::get('fields') ?: null;
		return call_user_func_array("\\".$this->modelName()."::selections", array($id,$fields));
	}
}