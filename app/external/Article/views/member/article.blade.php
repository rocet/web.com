@extends('Member::layouts.main')
@section('main')
    @include('Member::layouts.restful')
    {{--@if( $_current_action == 'index' )--}}
        {{--@include('Article::member.tables.index' )--}}
    {{--@elseif( $_current_action == 'show' )--}}
        {{--@include('Article::member.show' )--}}
    {{--@else--}}
        {{--@include('Article::member.forms.' . $_current_action )--}}
    {{--@endif--}}
@stop