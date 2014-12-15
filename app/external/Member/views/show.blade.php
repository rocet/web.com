@extends('layouts.main')
@section('main')
    @if( $item )
        <h3>User</h3>
        <ul class="list-group">
            <li class="list-group-item"> id : {{ $item->id }} </li>
            <li class="list-group-item"> email : {{ $item->email }} </li>
            <li class="list-group-item"> mobile : {{ $item->mobile }} </li>
            <li class="list-group-item"> user_name : {{ $item->user_name }} </li>
            <li class="list-group-item"> created_at : {{ $item->created_at }} </li>
            <li class="list-group-item"> group_id : {{ $item->group_id }} </li>
            <li class="list-group-item"> group_name : {{ $item->group->group_name }} </li>
            <li class="list-group-item"> region_id : {{ $item->region_id }} </li>
            {{--<li class="list-group-item"> region_name : {{ $item->region->region_name }} </li>--}}
            <li class="list-group-item"> organization_id : {{ $item->organization_id }} </li>
            {{--<li class="list-group-item"> organization_name : {{ $item->organization->organization_name }} </li>--}}
            <li class="list-group-item"> link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$item->id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$item->id)) }}</a>  </li>
        </ul>
        user show {{ $item->id }}
    @else
        ERROR !!!
    @endif
@stop