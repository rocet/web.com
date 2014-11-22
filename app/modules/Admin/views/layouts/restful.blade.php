@section('restful')
    @if( in_array($_curent_action, array('create', 'edit', 'store', 'update') ) )
        @if( $_curent_action == 'store' )
        @include('Admin::forms.create')
        @elseif($_curent_action == 'update')
        @include('Admin::forms.edit')
        @else
        @include('Admin::forms.' . $_curent_action )
        @endif
    @elseif( $_curent_action == 'show' )
        {{ print_r($item->toArray()) }}
    @elseif( $_curent_action == 'index' )
        @include('Admin::tables.default' )
    @endif
@show