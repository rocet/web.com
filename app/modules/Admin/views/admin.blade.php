@extends('Admin::layouts.main')
@section('main')
    @foreach( array('func' => 'get_loaded_extensions', 'var' => $_SERVER) as $type => $item )
        <ul class="list-group">
        @if( $type == 'func' )
            @foreach( $item() as $key => $value )
            <li class="list-group-item">{{ $key }} => {{ $value }}</li>
            @endforeach
        @elseif( $type == 'var' )
            @foreach( $item as $key => $value )
            <li class="list-group-item">{{ $key }} => {{ $value }}</li>
            @endforeach
        @endif
        </ul>
    @endforeach
    admin index
@stop