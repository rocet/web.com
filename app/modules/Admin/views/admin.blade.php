@extends('Admin::layouts.main')
@section('main')
    @foreach( array('func' => 'get_loaded_extensions', 'var' => $_SERVER) as $type => $item )
    @if( $type == 'func' )
    <div class="panel-heading">
    {{ $item }}
    </div>
    <ul class="list-group">
    @foreach( $item() as $key => $value )
    <li class="list-group-item"><p> {{ $value }} </p></li>
    @endforeach
    </ul>
    @elseif( $type == 'var' )
    <div class="panel-heading">
    {{ array_search($item, $GLOBALS)  }}
    </div>
    <ul class="list-group">
    @foreach( $item as $key => $value )
    <li class="list-group-item"><p> {{ $key }} => {{ $value }} </p></li>
    @endforeach
    </ul>
    @endif

    @endforeach
    <div class="panel-body">
    admin index
    </div>

@stop