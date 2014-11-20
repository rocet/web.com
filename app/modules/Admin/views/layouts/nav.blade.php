@section('nav')
    <ul>
        <li>
            <a href="{{ URL::route('home') }}">home</a>
        </li>
        <li>
            <a href="{{ URL::route('member') }}">member</a>
        </li>
        <li>
            <a href="{{ URL::route('admin') }}">admin</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\OrgnazeController@index') }}">orgnaze</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\GroupController@index') }}">group</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\UserController@index') }}">user</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\ResourceController@index') }}">resource</a>
        </li>
    </ul>
@show