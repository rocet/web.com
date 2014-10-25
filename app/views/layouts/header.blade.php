@section('header')
<h1>L4 Test Case</h1>
@if (Auth::check())
<p>welcome: {{ Auth::user()->user_name }}</p>
@endif
@show