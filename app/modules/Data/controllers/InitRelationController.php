<?php
namespace App\Modules\Data\Controllers;
class InitRelationController extends InitController
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
	protected function relationModelName(){
		$relations = explode('_', snake_case(substr(strrchr(get_class($this), '\\'), 1, -10)));
		array_pop( $relations );
		return ucfirst($relations[0]);
	}


	/**
	 * 首页
	 *
	 * @return Response
	 */
	public function index($relation_id=null, $id=null)
	{
		return $this->paginate($relation_id, $id);
	}


	/**
	 * 分页数据
	 *
	 * @return Response
	 */
	public function paginate($relation_id=null, $id=null)
	{
		return __METHOD__;
	}


	/**
	 * 添加记录
	 *
	 * @return Response
	 */
	public function store($relation_id=null)
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
	public function show($relation_id=null, $id=null)
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
	public function update($relation_id=null, $id=null)
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
	public function destroy($relation_id=null, $id=null)
	{
		//
		return __METHOD__;
	}
}