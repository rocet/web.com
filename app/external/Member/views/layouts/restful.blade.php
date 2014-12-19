@section('restful')
    @if( $_current_action == 'index' )
        @include('Member::tables.index' )
    @elseif( $_current_action == 'show' )
        @include('Member::layouts.show' )
    @else
        @include('Member::forms.' . $_current_action )
    @endif
@show