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
            <a href="{{ URL::route("forgetPassword") }}">{{ Lang::get('user.forgetPassword') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("reminder") }}">{{ Lang::get('user.reminder') }}</a>
        </li>
    @else
        <li>
            <a href="{{ URL::route("changePassword") }}">{{ Lang::get('user.changePassword') }}</a>
        </li>
        <li>
            <a href="{{ URL::route("logout") }}">{{ Lang::get('user.logout') }}</a>
        </li>
    @endif
    </ul>
@show