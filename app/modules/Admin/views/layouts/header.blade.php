@section('header')
<style>
label{
    clear: left;
    display: block;
    margin: 10px 0;
    }
</style>
<div class="page-header">
    <h1>L4 Test Case Admin <small>sample project</small></h1>
</div>
@if (Auth::check())
<div class="alert alert-success" role="alert">welcome: {{ Auth::user()->user_name }}</div>
@endif
@show