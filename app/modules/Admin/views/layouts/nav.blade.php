@section('nav')
    <ul>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\OrgnazeController@index') }}">orgnaze</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\GroupController@index') }}">group</a>
        </li>
    </ul>
@show