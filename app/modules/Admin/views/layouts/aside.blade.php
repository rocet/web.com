@section('aside')
<ol class="breadcrumb">
  <li><a href="{{ URl::route('home') }}">{{ Lang::get('Admin::common.home') }}</a></li>
  @if( isset($_curent_controller) )
  <li><a href="{{ URl::route('admin') }}">{{ Lang::get('Admin::common.admin') }}</a></li>
  <li><a href="{{ URl::route($_curent_controller.'.index') }}">{{ Lang::get('Admin::common.' . $_curent_controller)  }}</a></li>
  @endif
  <li class="active">{{ Lang::get('Admin::' . Route::currentRouteName()) }}</li>
</ol>
<div class="panel panel-default">
    <div class="panel-heading">admin aside</div>
    @if( Auth::user()->group_id == 1 )
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ URL::route('admin') }}">admin</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\OrganizationController@index') }}">organization</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\GroupController@index') }}">group</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\UserController@index') }}">user</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\ResourceController@index') }}">resource</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::action('App\\Modules\\Admin\\Controllers\\ComponentController@index') }}">component</a>
            </li>
        </ul>
    @endif
</div>
@show