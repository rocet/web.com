@section('header')
<style>
label{
    clear: left;
    display: block;
    margin: 10px 0;
    }
</style>
<h1>L4 Test Case</h1>
@if (Auth::check())
<p>welcome: {{ Auth::user()->user_name }}</p>
@endif
@show