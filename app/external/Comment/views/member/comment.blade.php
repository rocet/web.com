<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/20
 * Time: 8:54
 */ ?>
@extends('layouts.main')
@section('main')
    @if( $_current_action == 'index' )
        @include('Comment::member.tables.index' )
    @elseif( $_current_action == 'show' )
        @include('Comment::member.show' )
    @else
        @include('Comment::member.forms.' . $_current_action )
    @endif
@stop