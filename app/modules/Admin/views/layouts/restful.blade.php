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
        <ul class="list-group">
            @foreach( $item->toArray() as $key => $val )
            <li class="list-group-item">
            {{ $key }} : {{ $val }}
            </li>
            @endforeach
        </ul>

    @elseif( $_curent_action == 'index' )
        @include('Admin::tables.default' )
    @endif
@show