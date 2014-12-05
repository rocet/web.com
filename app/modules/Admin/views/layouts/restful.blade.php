@section('restful')
    @if( in_array($_current_action, array('create', 'edit', 'store', 'update') ) )
        @if( $_current_action == 'store' )
        @include('Admin::forms.create')
        @elseif($_current_action == 'update')
        @include('Admin::forms.edit')
        @else
        @include('Admin::forms.' . $_current_action )
        @endif
    @elseif( $_current_action == 'show' )
        <ul class="list-group">
            @foreach( $item->toArray() as $key => $val )
            <li class="list-group-item">
            {{ $key }} : {{ $val }}
            </li>
            @endforeach
        </ul>

    @elseif( $_current_action == 'index' )
        @include('Admin::tables.default' )
    @endif
@show