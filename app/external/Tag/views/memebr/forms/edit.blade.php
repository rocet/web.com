<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:34
 */ 
?>
@extends('layouts.main')
@section('main')
    {{ Form::open(array(
        'url' => URL::action('App\External\Tag\Controllers\Member\TagController@store', array('id'=>$item->id)),
        'autocomplete' => 'off'
    )) }}
    {{ Form::hidden('user_id', Auth::id()) }}
    {{ Form::hidden('item_id', $item->item_id) }}
    {{ Form::label('title', Lang::get('Tag::tag.title')) }}
    {{ Form::text('title', $item->title, array(
        'placeholder' => Lang::get('Tag::tag.title')
    )) }}

    {{ Form::submit(Lang::get('Tag::tag.edit')) }}
    {{ Form::close() }}
    member tag edit
@stop