@if( $item->isEmpty() )
    <div class="alert alert-warning">NO DATA <a href="{{ URL::route($_curent_controller.'.create') }}"><span class="glyphicon glyphicon-plus"></span></a> </div>
@else
    @if( Config::get('Admin::view/'.$_curent_controller) )
    <table class="table table-striped">
        <tr>
            @foreach( Config::get('Admin::view/'.$_curent_controller) as $field => $config )
            @if( isset( $config['grid']['show'] ) && $config['grid']['show'] )
            <th>{{ $field }}</th>
            @endif
            @endforeach
            <th><a href="{{ URL::route($_curent_controller.'.create') }}"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr>
        @foreach( $item as $row )
        <tr>

            @foreach( Config::get('Admin::view/'.$_curent_controller) as $field =>  $config )
            @if( isset( $config['grid']['show'] ) && $config['grid']['show'] )
            <td>{{ $row->$field or 'null' }}</td>
            @endif
            @endforeach
            <td>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.show', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.edit', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.destroy', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
                {{ Form::model($item, array('method' => 'DELETE', 'route' => array($_curent_controller.'.destroy', $row->id))); }}
                        {{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array( 'type' => 'submit', 'class' => 'btn btn-default btn-xs')) }}
                    {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </table>

    <ul class="pagination pull-right">
    {{ $item->links() }}
    </ul>

    @else
        <div class="alert alert-warning">NO CONFIG </div>
    @endif
@endif