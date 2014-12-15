@extends('layouts.main')
@section('main')
{{ Form::open(array(
    'url' => URL::action('App\External\Article\Controllers\Member\ArticleController@store', array('id'=>$item->id)),
    'autocomplete' => 'off'
)) }}
    {{ Form::hidden('user_id', Auth::id()) }}
    {{ Form::hidden('category_id', $item->category_id) }}
    {{ Form::label('title', Lang::get('Article::article.title')) }}
    {{ Form::text('title', $item->title, array(
        'placeholder' => Lang::get('Article::article.title')
    )) }}
    {{ Form::label('keyword', Lang::get('Article::article.keyword')) }}
    {{ Form::text('keyword', $item->keyword, array(
        'placeholder' => Lang::get('Article::article.keyword')
    )) }}
    {{ Form::label('description', Lang::get('Article::article.description')) }}
    {{ Form::text('description', $item->description, array(
        'placeholder' => Lang::get('Article::article.description')
    )) }}
    {{ Form::label('content', Lang::get('Article::article.content')) }}
    {{ Form::textarea('content', $item->content, array(
        'placeholder' => Lang::get('Article::article.content')
    )) }}

    {{ Form::submit(Lang::get('Article::article.edit')) }}
{{ Form::close() }}
    member article edit
@stop