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
    @else
    @if( Auth::user() )
    <pre>
    {{ Auth::user()->toJson() }}
    </pre>
    @endif
    <pre>
    var str = '';
    $.each($('.bs-glyphicons span.glyphicon'), function(i, n){
    	str += '\'' + n.className.replace('glyphicon glyphicon-', '') + '\',';
    });
    console.log(str);
    </pre>
    @include('icon')
    @include('animate')
    @endif
@stop