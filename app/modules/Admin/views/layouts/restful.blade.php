@section('restful')
    @if( in_array($_curent_action, array('create', 'edit') ) )
        @include('Admin::forms.' . $_curent_action )
    @elseif( $_curent_action == 'show' )
        {{ print_r($item->toArray()) }}
    @elseif( $_curent_action == 'index' )
        @include('Admin::tables.default' )
    @endif
@show