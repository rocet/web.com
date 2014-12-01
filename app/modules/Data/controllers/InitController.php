<?php
namespace App\Modules\Data\Controllers;

class InitController extends \Controller {
	/**
	 * 首页
	 *
	 * @return Response
	 */
	public function index() {
		return $this->paginate();
	}

	/**
	 * 表格数据
	 *
	 * @return Response
	 */
	public function gridData( array $config = array() ) {
		if ( empty( $config ) ) {
			return $this->index()->toArray();
		}
		$model       = $this->model();
		$modelName   = strtolower( $this->modelName() );
		$modelFields = array();
		foreach ( $config as $field => $conf ) {
			$modelFields[] = $modelName . '.' . $field;
			if ( isset( $conf['grid']['filter']['model'] ) ) {
				$isParent       = method_exists( $model, 'getParentColumn' ) && $field == $model->getParentColumn();
				$fieldModelName = strtolower( $conf['grid']['filter']['model'] );
				$modelFields[]  = ( $isParent ? 'parent' : $fieldModelName ) . '.' . $conf['grid']['filter']['field'] . ( $isParent ? ' AS parent_name ' : '' );
				$model = $model->join(
					$fieldModelName . ( $isParent ? ' AS ' . DB::getTablePrefix() . 'parent' : '' ),
					$modelName . '.' . $field,
					'=',
					( $isParent ? 'parent' : $fieldModelName ) . '.id'
				);
			}
		}
		return $model
			//->whereNull($modelName.'.pid')
			->select( $modelFields )
			->orderBy( $modelName . '.' . $this->sortColumn(), $this->sortOrder() )
			->paginate( $this->perPageNum() );
	}

	/**
	 * 分页数据
	 *
	 * @return Response
	 */
	public function paginate() {
		// return call_user_func( "\\" . $this->modelName() . "::paginate", $this->perPageNum() );
		return $this->model()->orderBy( $this->sortColumn(), $this->sortOrder() )->paginate( $this->perPageNum() );
	}

	/**
	 * 分页条数
	 *
	 * @return Response
	 */
	protected function perPageNum() {
		$pageNum = Config::get( 'Data::common.per_page.' . strtolower( $this->modelName() ) );

		return $pageNum ?: Config::get( 'Data::common.per_page.default' );
	}

	/**
	 * 排序
	 *
	 * @return Response
	 */
	protected function sortOrder() {
		$sortOrder = Config::get( 'Data::common.order.' . strtolower( $this->modelName() ) );

		return $sortOrder ?: Config::get( 'Data::common.order.default' );
	}


	/**
	 * 排序字段
	 *
	 * @return Response
	 */
	protected function sortColumn() {
		$sortColumn = Config::get( 'Data::common.column.' . strtolower( $this->modelName() ) );

		return $sortColumn ?: Config::get( 'Data::common.column.default' );
	}

	/**
	 * 创建界面
	 *
	 * @return Response
	 */
	public function create() {
		//
		return __METHOD__;
	}

	/**
	 * 添加记录
	 *
	 * @return Response
	 */
	public function store( $input ) {
		dd( $input );

		return $this->validate( function () use ( $input ) {
			dd( $input );
			if ( $model = $this->model()->firstOrCreate( $input ) ) {
				return $model;
			}

			return 0;
		}, $input, 0 );
	}

	/**
	 * 单条记录
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show( $id = null ) {
		//
		return call_user_func( "\\" . $this->modelName() . "::find", $id );
	}

	/**
	 * 修改界面
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit( $id = null ) {
		//
		return call_user_func( "\\" . $this->modelName() . "::find", $id );
	}

	/**
	 * 保存修改
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update( $id, $input ) {
		return $this->validate( function () use ( $id, $input ) {
			dd( $input );
			if ( $model = $this->model()->find( $id ) ) {
				foreach ( $input as $field => $value ) {
					$model->$field = $value;
				}
				$model->save();

				return $model;
			}

			return 0;
		}, $input, 0 );
	}

	/**
	 * 删除记录
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy( $id = null ) {
		//
		return call_user_func( "\\" . $this->modelName() . "::delete", $id );
	}

	/**
	 * 下拉列表
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function selections( $field, $pid = 0, $id = 'id' ) {
		return call_user_func_array( "\\" . $this->modelName() . "::selections", array( $field, $pid, $id ) );
	}

	/**
	 * 模型
	 *
	 * @return Response
	 */
	protected function model() {
		$modelName = $this->modelName();

		return new $modelName();
	}

	/**
	 * 模型名称
	 *
	 * @return Response
	 */
	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	/**
	 * 搜索条件
	 *
	 * @return Response
	 */
	protected function serch() {
		$serch = Input::request( 'serch' );

		return $serch;
	}

	/**
	 * 批量操作
	 *
	 * @return Response
	 */
	protected function batch($reqAll) {
		foreach($reqAll as $req){
			call_user_func_array(array($this, $req['method']), array_except($req, 'method'));
		}
	}
}