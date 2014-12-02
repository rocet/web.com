@extends('Admin::layouts.main')

@section('main')
    @include('Admin::layouts.restful')
    group pages
@stop

@section('footer')
@parent
<script type="text/javascript" src="/assets/js/base.js"></script>
@stop