@extends('layouts.main')
@section('main')
    @if( isset($templateDefault) )
        @include('Member::layouts.restful')
    @else
        @if( $_current_action == 'index' )
            @include('Article::member.tables.index' )
        @elseif( $_current_action == 'show' )
            @include('Article::member.show' )
        @else
            @include('Article::member.forms.' . $_current_action )
        @endif
    @endif
@stop