@extends('layouts.main')
@section('main')
    @if( $item->isEmpty() )
        comment index Empty !!!
    @else
        @foreach( $item as $comment )
            <ul class="list-group">
                <li class="list-group-item"> id : {{ $comment->id }} </li>
                <li class="list-group-item"> title : {{ $comment->title }} </li>
                <li class="list-group-item"> content : {{ $comment->content }} </li>
                <li class="list-group-item"> sort : {{ $comment->sort }} </li>
                <li class="list-group-item"> created_at : {{ $comment->created_at }} </li>
                <li class="list-group-item"> user_id : {{ $comment->user_id }} </li>
                <li class="list-group-item"> user_name : {{ $comment->user->user_name }}
                <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$comment->user_id)) }}</a>  </li>
                @if(Auth::id() == $comment->user_id )
                <li class="list-group-item"> edit_link : <a href="{{ URL::route('user.comments.edit', array('user' => $comment->user_id, 'article'=>$comment->id)) }}">{{ URL::route('user.comments.edit', array('user' => $comment->user_id, 'article'=>$comment->id)) }}</a>  </li>
                <li class="list-group-item"> destroy_link : <a href="{{ URL::route('user.comments.destroy', array('user' => $comment->user_id, 'article'=>$comment->id)) }}">{{ URL::route('user.comments.destroy', array('user' => $comment->user_id, 'article'=>$comment->id)) }}</a>  </li>
                @endif
            </ul>
        @endforeach
    @endif
    @include( Auth::check() ? 'Comment::forms.comment' : 'forms.common.login')
    member comment index
@stop