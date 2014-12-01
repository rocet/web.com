<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/22
 * Time: 16:19
 */

namespace App\Modules\Data\Controllers;

class TreeController extends InitController {

	/**
	 * 添加记录
	 *
	 * @return Response
	 */
	public function store( $input ) {
		return $this->validate( function () use ( $input ) {
			$parentColumnName = $this->model()->getParentColumn();
			if ( !$input[$parentColumnName] ) {
				$input[$parentColumnName] = null;
				$model = $this->model()->create( $input );
			} else {
				$model = $this->model()->find($input[$parentColumnName])->children()->create( $input );
			}
			return isset( $model ) ? $model : 0;
		}, $input, 0 );
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
			$parentColumnName = $this->model()->getParentColumn();
			if ( $model = $this->model()->find( $id ) ) {
				$changed = 0;
				if( $model->$parentColumnName != $input[$parentColumnName] ){
					$changed = 1;
					if( !$input[$parentColumnName] ){
						$model->makeRoot();
					} else if( $input[$parentColumnName] ){
						$model->makeChildOf($this->model()->find($input[$parentColumnName]));
					}
				}
				if( $model->sort != $input['sort'] ){
					// $model->makeSiblingOf($this->model()->find( $input['sort'] ))
				}
				foreach ( $input as $field => $value ) {
					$model->$field = $value;
				}
				$model->save();
				return $model;
			}

			return 0;
		}, $input );
	}
} 