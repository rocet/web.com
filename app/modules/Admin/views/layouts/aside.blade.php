@section('aside')
<ol class="breadcrumb">
    <li><a href="{{ URl::route('home') }}">{{ Lang::get('Admin::common.home') }}</a></li>
    @if( isset($_current_controller) )
    <li><a href="{{ URl::route('admin') }}">{{ Lang::get('Admin::common.admin') }}</a></li>
    <li><a href="{{ URl::route($_current_controller.'.index', $_current_relations) }}">{{ Lang::get($_current_component . '::common.' . $_current_controller)  }}</a></li>
    @endif
    <li class="active">{{ Lang::get( isset($_current_component) ? $_current_component . '::' . Route::currentRouteName() : 'Admin::common.admin' ) }}</li>
</ol>
<div class="panel panel-default">
    @if( Auth::user()->group_id == 1 )

    @foreach(Config::get( 'Admin::view.common.menus' ) as $name => $menu)
    <div class="panel-heading">{{ Lang::get('Admin::common.'.$name) }}</div>
    <ul class="list-group">
        @foreach($menu as $item)
        <li class="list-group-item">
            <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
        </li>
        @endforeach
    </ul>
    @endforeach

    @endif
</div>
@show