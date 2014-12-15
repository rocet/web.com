@section('nav')
    <ul>
    @if (!Auth::check())
        <li>
            <a href="{{ URL::route("login") }}">{{ Lang::get('user.login') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("register") }}">{{ Lang::get('user.register') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("reminder") }}">{{ Lang::get('user.reminder') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("reset") }}">{{ Lang::get('user.reset') }}</a>
        </li>
    @else
        @if( Auth::user()->group_id == 1)
        <li>
            <a href="{{ URL::route("admin") }}">{{ Lang::get('user.admin') }}</a>
        </li>
        @endif
        <li>
            <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>Auth::id())) }}">{{ Lang::get('user.home') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("profile") }}">{{ Lang::get('user.profile') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("changePassword") }}">{{ Lang::get('user.changePassword') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("logout") }}">{{ Lang::get('user.logout') }}</a>
        </li>
    @endif
        <li>
            <a href="{{ URL::route("member") }}">{{ Lang::get('user.member') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("shop") }}">{{ Lang::get('user.shop') }}</a>
        </li>
        <li>
            <a href="http://cheats.jesse-obrien.ca/" target="_blank">cheatsheet</a>
        </li>
    </ul>
@show