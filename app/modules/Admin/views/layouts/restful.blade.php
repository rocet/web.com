@section('restful')
    @if( in_array(CURRENT_ACTION, array('create', 'edit') ) )
    @include('Admin::forms.' . CURRENT_ACTION )
    @elseif( CURRENT_ACTION == 'show' )
    {{ print_r($item->toArray()) }}
    @elseif( CURRENT_ACTION == 'index' )
        @if( $item->isEmpty() )
        <div class="alert alert-warning">NO DATA</div>
        @else
        <table class="table table-striped">
            <tr>
                @foreach( $item->toArray()['data'][0] as $field =>  $value )
                <th>{{ $field }}</th>
                @endforeach
                <th></th>
            </tr>
            @foreach( $item as $row )
            <tr>
                @foreach( $item->toArray()['data'][0] as $field =>  $value )
                <td>{{ $row->$field or 'null' }}</td>
                @endforeach
                <td>
                    <a class="btn btn-default btn-xs" href="{{ URL::route(CURRENT_CONTROLLER.'.show', array('id'=>$row->id))  }}">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                    <a class="btn btn-default btn-xs" href="{{ URL::route(CURRENT_CONTROLLER.'.edit', array('id'=>$row->id))  }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-default btn-xs" href="{{ URL::route(CURRENT_CONTROLLER.'.destroy', array('id'=>$row->id))  }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        {{--{{ Form::model($item, array('method' => 'DELETE', 'route' => array('group.destroy', $row->id))); }}--}}
            {{--{{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array( 'type' => 'submit', 'class' => 'btn btn-default btn-xs')) }}--}}
        {{--{{ Form::close() }}--}}
        <ul class="pagination pull-right">
        {{ $item->links() }}
        </ul>
        @endif
    @endif
@show