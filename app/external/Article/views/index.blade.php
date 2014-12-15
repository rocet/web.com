@extends('layouts.main')
@section('main')
    @if( $item->isEmpty() )
    article index Empty !!!
    @else
        @foreach( $item as $row )
            <ul class="list-group">
                <li class="list-group-item"> id : {{ $row->id }} </li>
                <li class="list-group-item"> title : {{ $row->title }} </li>
                <li class="list-group-item"> content : {{ $row->content }} </li>
                <li class="list-group-item"> description : {{ $row->description }} </li>
                <li class="list-group-item"> keyword : {{ $row->keyword }} </li>
                <li class="list-group-item"> image : {{ $row->image }} </li>
                <li class="list-group-item"> sort : {{ $row->sort }} </li>
                <li class="list-group-item"> created_at : {{ $row->created_at }} </li>
                <li class="list-group-item"> user_id : {{ $row->user_id }} </li>
                <li class="list-group-item"> user_name : {{ $row->user->user_name }} </li>
                <li class="list-group-item"> category_id : {{ $row->category_id }} </li>
                <li class="list-group-item"> category_name : {{ $row->category->category_name }} </li>
                <li class="list-group-item"> link : {{ URL::action('App\External\Article\Controllers\ArticleController@show', array('id'=>$row->id)) }} </li>
                <li class="list-group-item"> user_link : {{ URL::route('home', array('id'=>$row->user_id)) }} </li>
                <li class="list-group-item"> category_link : {{ URL::action('App\External\Article\Controllers\ArticleController@index', array('id'=>$row->category_id)) }} </li>
            </ul>
        @endforeach
    @endif
@stop