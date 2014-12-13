@extends('layouts.main')
@section('main')
    @if( $item )
    <ul class="list-group">
        <li class="list-group-item"> id : {{ $item->id }} </li>
        <li class="list-group-item"> title : {{ $item->title }} </li>
        <li class="list-group-item"> content : {{ $item->content }} </li>
        <li class="list-group-item"> description : {{ $item->description }} </li>
        <li class="list-group-item"> keyword : {{ $item->keyword }} </li>
        <li class="list-group-item"> image : {{ $item->image }} </li>
        <li class="list-group-item"> sort : {{ $item->sort }} </li>
        <li class="list-group-item"> created_at : {{ $item->created_at }} </li>
        <li class="list-group-item"> user_id : {{ $item->user_id }} </li>
        <li class="list-group-item"> user_name : {{ $item->user->user_name }} </li>
        <li class="list-group-item"> category_id : {{ $item->category_id }} </li>
        <li class="list-group-item"> category_name : {{ $item->category->category_name }} </li>
        <li class="list-group-item"> link : {{ URL::route('articleShow', array('id'=>$item->id)) }} </li>
        <li class="list-group-item"> user_link : {{ URL::route('home', array('id'=>$item->user_id)) }} </li>
        <li class="list-group-item"> category_link : {{ URL::route('articleList', array('cate'=>$item->category_id)) }} </li>
    </ul>
    article show {{ $item->id }}
    @else
    ERROR !!!
    @endif
@stop