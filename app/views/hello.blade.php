@extends('layouts.main')

{{--@section('footer')--}}
{{--@parent--}}
{{--<p>This is appended to the main footer.</p>--}}
{{--@stop--}}
{{--@section('aside')--}}
{{--@parent--}}
{{--<p>This is appended to the main aside.</p>--}}
{{--@stop--}}

@section('main')
    @if(Request::segment(1))
    @include('forms.common.' . strtolower(Request::segment(1)) )
    @endif
@stop