@extends('layout.layout')
@section('main')
{{ print_r( $user->toArray() ) }}
@stop