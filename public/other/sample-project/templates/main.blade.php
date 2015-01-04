@extends('layout.layout')
@section('main')
{{ print_r( $items->toArray() ) }}
@stop