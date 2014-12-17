@extends('layouts.main')
@section('main')
{{ Form::open(array(
    'url' => URL::action('App\External\Comment\Controllers\Member\CommentController@store', array('id'=>$item->id)),
    'autocomplete' => 'off'
)) }}
    {{ Form::hidden('user_id', Auth::id()) }}
    {{ Form::hidden('item_id', $item->item_id) }}
    {{ Form::label('title', Lang::get('Comment::comment.title')) }}
    {{ Form::text('title', $item->title, array(
        'placeholder' => Lang::get('Comment::comment.title')
    )) }}
    {{ Form::label('content', Lang::get('Comment::comment.content')) }}
    {{ Form::textarea('content', $item->content, array(
        'placeholder' => Lang::get('Comment::comment.content')
    )) }}

    {{ Form::submit(Lang::get('Comment::comment.edit')) }}
{{ Form::close() }}
    member comment edit
@stop