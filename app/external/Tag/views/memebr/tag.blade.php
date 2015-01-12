<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/6
 * Time: 10:31
 */
?>
@extends('layouts.main')
@section('main')
    @if( $_current_action == 'index' )
        @include('Tag::member.tables.index' )
    @elseif( $_current_action == 'show' )
        @include('Tag::member.show' )
    @else
        @include('Tag::member.forms.' . $_current_action )
    @endif
@stop