@extends('layouts.main')
@section('main')
    @if( ! $item->isEmpty() )
    <h3>Comments <a href="{{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$item->first()->item('Article')->first()->id)) }}">{{ $item->first()->item('Article')->first()->title }}</a></h3>
    @foreach($item as $comment)
        <ul class="list-group">
            <li class="list-group-item"> id : {{ $comment->id }} </li>
            <li class="list-group-item"> title : {{ $comment->title }} </li>
            <li class="list-group-item"> content : {{ $comment->content }} </li>
            <li class="list-group-item"> sort : {{ $comment->sort }} </li>
            <li class="list-group-item"> created_at : {{ $comment->created_at }} </li>
            <li class="list-group-item"> user_id : {{ $comment->user_id }} </li>
            <li class="list-group-item"> user_name : {{ $comment->user->user_name }}
            <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}</a>  </li>
        </ul>
    @endforeach
    @endif
    @include( Auth::check() ? 'Comment::forms.comment' : 'forms.common.login')
@stop