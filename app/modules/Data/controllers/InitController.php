<?php
namespace App\Modules\Data\Controllers;

class InitController extends \Controller
{
    protected $initRelation = array();

    public function initRelation($initRelation = array())
    {
        $this->initRelation = $initRelation;

        return $this;
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
     * 表格数据
     *
     * @return Response
     */
    public function gridData(array $config = array())
    {
        if (empty($config)) {
            return $this->index();
        }
        $model = $this->model();
        $modelName = strtolower($this->modelName());
        $modelFields = array();
        foreach ($config as $field => $conf) {
            $modelFields[] = $modelName . '.' . $field;
            if (isset($conf['grid']['filter']['model'])) {
                $isParent = method_exists($model, 'getParentColumn') && $field == $model->getParentColumn();
                $fieldModelName = strtolower($conf['grid']['filter']['model']);
                $modelFields[] = ($isParent ? 'parent' : $fieldModelName) . '.' . $conf['grid']['filter']['field'] . ($isParent ? ' AS parent_name ' : '');
                $model = $model->join(
                    $fieldModelName . ($isParent ? ' AS ' . DB::getTablePrefix() . 'parent' : ''),
                    $modelName . '.' . $field,
                    '=',
                    ($isParent ? 'parent' : $fieldModelName) . '.id'
                );
            }
        }

        return $model
            //->whereNull($modelName.'.pid')
            ->select($modelFields)
            ->orderBy($modelName . '.' . $this->sortColumn(), $this->sortOrder())
            ->paginate($this->perPageNum());
    }

    /**
     * 分页数据
     *
     * @return Response
     */
    public function paginate()
    {
	    $model = $this->model()->orderBy($this->sortColumn(), $this->sortOrder());
	    foreach( $this->fieldFilter() as $filter ){
		    $model = $model->with($filter);
	    }
        return $model->paginate($this->perPageNum());
    }

	/**
	 * 关联字段
	 *
	 * @return Response
	 */
	protected function fieldFilter()
	{
		$allFieldFilter = array();
		$fields = \Config::get('Admin::view.'. strtolower( $this->modelName() ) );
		foreach($fields as $field){
			if( isset($field['grid']['filter']) ){
				$allFieldFilter[] = $field['grid']['filter']['relate'];
			}
		}
		return $allFieldFilter;
	}

    /**
     * 分页条数
     *
     * @return Response
     */
    protected function perPageNum()
    {
        $pageNum = Config::get('Data::common.per_page.' . strtolower($this->modelName()));

        return $pageNum ?: Config::get('Data::common.per_page.default');
    }

    /**
     * 排序
     *
     * @return Response
     */
    protected function sortOrder()
    {
        $sortOrder = Config::get('Data::common.order.' . strtolower($this->modelName()));

        return $sortOrder ?: Config::get('Data::common.order.default');
    }


    /**
     * 排序字段
     *
     * @return Response
     */
    protected function sortColumn()
    {
        $sortColumn = Config::get('Data::common.column.' . strtolower($this->modelName()));

        return $sortColumn ?: Config::get('Data::common.column.default');
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
    public function store($input)
    {
        return $this->validate(function () use ($input) {
            if ($model = $this->model()->firstOrCreate($input)) {
                return $model;
            }

            return 0;
        }, $input);
    }

    /**
     * 单条记录
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id = null)
    {
        //
        return call_user_func("\\" . $this->modelName() . "::find", $id);
    }

	/**
	 * 单条记录带关系
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function showWithRelate($id = null, $relates = array())
	{
		//
		$model = $this->model();
		if(!empty($relates)){
			foreach($relates as $relate){
				$model = $model->with($relate);
			}
		}
		return $model->find($id);
	}

    /**
     * 修改界面
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id = null)
    {
        //
        return call_user_func("\\" . $this->modelName() . "::find", $id);
    }

    /**
     * 保存修改
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id, $input)
    {
        return $this->validate(function () use ($id, $input) {
            if ($model = $this->model()->find($id)) {
                $changed = 0;
                foreach ($input as $field => $value) {
                    if ($model->$field != $value) {
                        $changed = 1;
                        $model->$field = $value;
                    }
                }
                $changed && $model->save();

                return $model;
            }

            return 0;
        }, $input, $id);
    }

    /**
     * 删除记录
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id = null)
    {
        //
        return call_user_func("\\" . $this->modelName() . "::delete", $id);
    }

    /**
     * 下拉列表
     *
     * @param  int $id
     *
     * @return Response
     */
    public function selections($field, $pid = 0, $id = 'id')
    {
        return call_user_func_array("\\" . $this->modelName() . "::selections", array($field, $pid, $id));
    }

    /**
     * 模型
     *
     * @return Response
     */
    protected function model()
    {

        $modelName = $this->modelName();
        if (!empty($this->initRelation)) {
            $relateId = end($this->initRelation);
            $relate = ucfirst(key($this->initRelation));
            $model = strtolower($modelName . 's');
            $model = $relate::find($relateId)->$model();  // relation
            if (!\Request::isMethod('get')) {
                $model = $model->getRelated();  // model
            }
        } else {
            $model = new $modelName();  // model
        }

        return $model;
    }

    /**
     * 模型名称
     *
     * @return Response
     */
    protected function modelName()
    {
        return substr(strrchr(get_class($this), '\\'), 1, -10);
    }

    /**
     * 搜索条件
     *
     * @return Response
     */
    public function serch()
    {
        $serch = Input::request('serch');

        return $serch;
    }

    /**
     * 批量操作
     *
     * @return Response
     */
    public function batch($reqAll)
    {
        foreach ($reqAll as $req) {
            call_user_func_array(array($this, $req['method']), array_except($req, 'method'));
        }
    }

    /**
     * 验证字段
     *
     * @return Response
     */
    public function validate( \Closure $callback, $input, $id = 0 ) {
        $valid = array(

        );
        $valid = \Validator::make( $input, array_intersect_key( $valid, $input ), array(), array(

        ) );
        if ( $valid->passes() ) {
            return $callback();
        }

        return $valid;
    }
}