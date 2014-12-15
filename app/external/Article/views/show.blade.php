@extends('layouts.main')
@section('main')
    @if( $item )
    <h3>Articles</h3>
    <ul class="list-group">
        <li class="list-group-item"> id : {{ $item->id }} </li>
        <li class="list-group-item"> title : {{ $item->title }} </li>
        <li class="list-group-item"> content : {{ $item->content }} </li>
        <li class="list-group-item"> description : {{ $item->description }} </li>
        <li class="list-group-item"> keyword : {{ $item->keyword }} </li>
        <li class="list-group-item"> image : {{ $item->image }} </li>
        <li class="list-group-item"> sort : {{ $item->sort }} </li>
        <li class="list-group-item"> created_at : {{ $item->created_at }} </li>
        <li class="list-group-item"> user_id : {{ $item->user_id }} </li>
        <li class="list-group-item"> user_name : {{ $item->user->user_name }} </li>
        <li class="list-group-item"> category_id : {{ $item->category_id }} </li>
        <li class="list-group-item"> category_name : {{ $item->category->category_name }} </li>
        <li class="list-group-item"> link : <a href="{{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$item->id)) }}">{{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$item->id)) }}</a>  </li>
        <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$item->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$item->user_id)) }}</a>  </li>
        <li class="list-group-item"> category_link : <a href="{{ URL::action('App\External\Article\Controllers\ArticleController@index', array('id'=>$item->category_id)) }}">{{ URL::action('App\External\Article\Controllers\ArticleController@index', array('id'=>$item->category_id)) }}</a>  </li>
        @if(Auth::id() == $item->user_id )
        <li class="list-group-item"> edit_link : <a href="{{ URL::action('App\External\Article\Controllers\Member\ArticleController@edit', array('user' => $item->user_id, 'article'=>$item->id)) }}">{{ URL::action('App\External\Article\Controllers\Member\ArticleController@edit', array('user' => $item->user_id, 'article'=>$item->id)) }}</a>  </li>
        @endif
    </ul>
    @if( ! $item->comments->isEmpty() )
    <h3>Comments <a href="{{ URL::action('App\External\Comment\Controllers\CommentController@index', array('id'=>$item->id)) }}">More</a></h3>
    @foreach($item->comments as $comment)
        <ul class="list-group">
            <li class="list-group-item"> id : {{ $comment->id }} </li>
            <li class="list-group-item"> title : {{ $comment->title }} </li>
            <li class="list-group-item"> content : {{ $comment->content }} </li>
            <li class="list-group-item"> sort : {{ $comment->sort }} </li>
            <li class="list-group-item"> created_at : {{ $comment->created_at }} </li>
            <li class="list-group-item"> user_id : {{ $comment->user_id }} </li>
            <li class="list-group-item"> user_name : {{ $comment->user->user_name }} </li>
            <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}</a>  </li>
        </ul>
    @endforeach
    @endif
    @include( Auth::check() ? 'Article::forms.comment' : 'forms.common.login')
    article show {{ $item->id }}
    @else
    ERROR !!!
    @endif
@stop