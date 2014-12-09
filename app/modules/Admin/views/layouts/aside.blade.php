@section('aside')
<ol class="breadcrumb">
    <li><a href="{{ URl::route('home') }}">{{ Lang::get('Admin::common.home') }}</a></li>
    @if( isset($_current_controller) )
    <li><a href="{{ URl::route('admin') }}">{{ Lang::get('Admin::common.admin') }}</a></li>
    <li><a href="{{ URl::route($_current_controller.'.index', $_current_relations) }}">{{ Lang::get('Admin::common.' . $_current_controller)  }}</a></li>
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
                <a href="{{ URL::route('user.index') }}">user</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('group.index') }}">group</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('rule.index') }}">rule</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('organization.index') }}">organization</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('resource.index') }}">resource</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('component.index') }}">component</a>
            </li>
            <li class="list-group-item">
                <a href="{{ URL::route('menu.index') }}">menu</a>
            </li>
        </ul>
    @endif
</div>
@show