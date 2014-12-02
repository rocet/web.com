@section('nav')
    @if( Auth::user()->group_id == 1 )
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ URL::route('home') }}">home</a>
        </li>
        <li class="active">
            <a href="{{ URL::route('admin') }}">admin</a>
        </li>
        <li>
            <a href="{{ URL::route('member') }}">member</a>
        </li>
        <li>
            <a href="{{ URL::route('shop') }}">shop</a>
        </li>
    </ul>
    @endif
@show