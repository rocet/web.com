@extends('layouts.main')
@section('main')
    @if( $item->isEmpty() )
        article index Empty !!!
    @else
        @foreach( $item as $row )
            <ul class="list-group">
                <li class="list-group-item"> id : {{ $row->id }} </li>
                <li class="list-group-item"> title : {{ $row->title }} </li>
                <li class="list-group-item"> content : {{ $row->content }} </li>
                <li class="list-group-item"> description : {{ $row->description }} </li>
                <li class="list-group-item"> keyword : {{ $row->keyword }} </li>
                <li class="list-group-item"> image : {{ $row->image }} </li>
                <li class="list-group-item"> sort : {{ $row->sort }} </li>
                <li class="list-group-item"> created_at : {{ $row->created_at }} </li>
                <li class="list-group-item"> user_id : {{ $row->user_id }} </li>
                <li class="list-group-item"> user_name : {{ $row->user->user_name }} </li>
                <li class="list-group-item"> category_id : {{ $row->category_id }} </li>
                <li class="list-group-item"> category_name : {{ $row->category->category_name }} </li>
                <li class="list-group-item"> link : <a href="{{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$row->id)) }}">{{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$row->id)) }}</a>  </li>
                <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$row->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$row->user_id)) }}</a>  </li>
                <li class="list-group-item"> category_link : <a href="{{ URL::action('App\External\Article\Controllers\ArticleController@index', array('id'=>$row->category_id)) }}">{{ URL::action('App\External\Article\Controllers\ArticleController@index', array('id'=>$row->category_id)) }}</a>  </li>
                @if(Auth::id() == $row->user_id )
                <li class="list-group-item"> edit_link : <a href="{{ URL::action('user.articles.edit', array('user' => $row->user_id, 'article'=>$row->id)) }}">{{ URL::action('user.articles.edit', array('user' => $row->user_id, 'article'=>$row->id)) }}</a>  </li>
                <li class="list-group-item"> destroy_link : <a href="{{ URL::action('user.articles.destroy', array('user' => $row->user_id, 'article'=>$row->id)) }}">{{ URL::action('user.articles.destroy', array('user' => $row->user_id, 'article'=>$row->id)) }}</a>  </li>
                @endif
            </ul>
        @endforeach
    @endif
    member article index
@stop