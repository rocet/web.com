@section('nav')
    @if( Auth::user()->group_id == 1 )
    <ul>
        <li>
            <a href="{{ URL::route('home') }}">home</a>
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