@section('aside')
<h3>admin aside contents..</h3>
@if( Auth::user()->group_id == 1 )
    <ul>
        <li>
            <a href="{{ URL::route('admin') }}">admin</a>
        </li>
        <li>
            <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\OrganizationController@index') }}">organization</a>
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
    @endif
@show