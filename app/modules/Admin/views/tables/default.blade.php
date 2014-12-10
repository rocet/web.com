<div class="panel-heading">
    admin {{ Lang::get($_current_component . '::'.$_current_controller.'.index')  }}
</div>

@if( $item->isEmpty() )
<div class="panel-body">
    <div class="alert alert-warning">NO DATA <a href="{{ URL::route($_current_controller.'.create', $_current_relations) }}"><span class="glyphicon glyphicon-plus"></span></a> </div>
</div>
@else
    @if( Config::get('Admin::view.'.$_current_controller) )
    <div class="panel-body">
    @if( Config::get('Admin::view.'.$_current_controller.'.pid') )
        {{ Form::open( array('class' => 'form-inline', 'route' => Route::currentRouteName()) ) }}
        {{ Form::treeSelect('pid', Config::get('Admin::view.'.$_current_controller.'.pid.form.options')+array(), Input::get('pid'), Config::get('Admin::view.'.$_current_controller.'.pid.form.attr'), Config::get('Admin::view.'.$_current_controller.'.pid.form.option_model')) }}
        {{ Form::close() }}
    @endif
    </div>
    <div class="overflow-x-auto">
    <table class="table table-striped table-hover">
        <tr>
            @foreach( Config::get($_current_component . '::view.'.$_current_controller) as $field => $config )
            @if( isset( $config['grid']['show'] ) && $config['grid']['show'] )
            <th>{{ Lang::get('Admin::'.$_current_controller.'.'.$field) }}</th>
            @endif
            @endforeach
            <th><a href="{{ URL::route($_current_controller.'.create', $_current_relations ) }}"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr>
        @foreach( $item as $row )
        <tr>

            @foreach( Config::get('Admin::view.'.$_current_controller) as $field =>  $config )
            @if( isset( $config['grid']['show'] ) && $config['grid']['show'] )
            <td>
                @if( isset($config['grid']['filter']) )
                @if( $row->$field )
                {{ HTML::filter($field, $row, $config['grid']['filter']) }}
                @else
                {{ $config['grid']['empty'] or 'null' }}
                @endif
                @else
                {{ $row->$field or 'null' }}
                @endif
            </td>
            @endif
            @endforeach
            <td>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_current_controller.'.show', $_current_relations + array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_current_controller.'.edit', $_current_relations + array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_current_controller.'.destroy', $_current_relations + array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
                {{--{{ Form::model($item, array('method' => 'DELETE', 'route' => array($_current_controller.'.destroy', $row->id))); }}--}}
                    {{--{{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array( 'type' => 'submit', 'class' => 'btn btn-default btn-xs')) }}--}}
                {{--{{ Form::close() }}--}}

                @foreach( Config::get('Admin::view.'.$_current_controller) as $field =>  $config )
                @if( isset( $config['grid']['links'] ) )
                <a class="btn btn-default btn-xs" href="{{ URL::route($_current_controller.'.'.$config['grid']['links']['model'].'.index', $_current_relations + array('id'=>$row->id))  }}">
                    <span class="{{ $config['grid']['links']['icon'] }}"></span>
                </a>
                @endif
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    <div class="panel-body">
        <ul class="pagination pull-right">
        {{ $item->links() }}
        </ul>
    </div>
    @else
    <div class="panel-body">
        <div class="alert alert-warning">NO CONFIG </div>
    </div>
    @endif
@endif