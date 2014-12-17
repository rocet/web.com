<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2014/12/17
 * Time: 20:05
 */

namespace App\External\Comment\Controllers\Member;


class CommentController extends \BaseController{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return \View::make('Comment::member.index')->with(array('item' => $this->dataApi()->indexWithRelate( array('user', 'component') ) ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return \View::make('Comment::member.create');
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
        $id = $this->realId($id, func_get_args());
        return \View::make('Comment::member.edit')->with(array('item' => $this->dataApi()->edit( $id ) ))->with( 'id', $id );
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

    protected function realId( $id, $args = array() ) {
        $_currentRelation = $this->getCurrentRelation();

        return !empty( $_currentRelation ) ? end($args) : $id;
    }

    protected function modelName() {
        return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
    }

    protected function dataApi( $model = '' ) {
        $controller = 'App\External\Comment\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

        return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
    }
}