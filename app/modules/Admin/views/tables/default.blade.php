@if( $item->isEmpty() )
    <div class="alert alert-warning">NO DATA <a href="{{ URL::route($_curent_controller.'.create') }}"><span class="glyphicon glyphicon-plus"></span></a> </div>
@else
    @if( Config::get('Admin::view/'.$_curent_controller) )
    {{--@if( Config::get('Admin::view/'.$_curent_controller.'.pid') )--}}
    {{--{{ Form::open( array('route' => Route::currentRouteName()) ) }}--}}
    {{--{{ Form::treeSelect('pid', Config::get('Admin::view/'.$_curent_controller.'.pid.form.options')+array(), Input::get('pid'), Config::get('Admin::view/'.$_curent_controller.'.pid.form.attr'), Config::get('Admin::view/'.$_curent_controller.'.pid.form.option_model')) }}--}}
    {{--{{ Form::close() }}--}}
    {{--<script type="text/javascript">--}}
    {{--window.onload = function(){--}}
        {{--function removeOldSelect(el){--}}
            {{--if( el.next().is('select') ){--}}
                {{--if( el.next().attr('id') ){--}}
                    {{--el.attr( {'id':el.next().attr('id'), 'name':el.next().attr('name')} );--}}
                {{--}--}}
                {{--el.next().remove();--}}
                {{--removeOldSelect( el );--}}
            {{--} else {--}}
                {{--return 0;--}}
            {{--}--}}
        {{--}--}}
        {{--$('select[data-src]').on('change', function(){--}}
            {{--var el = this;--}}
            {{--$.get($(el).attr('data-src')+'&pid='+el.value, function(r){--}}
                {{--if( Object.keys(r).length ){--}}
                    {{--if( $(el).next().is('select') ){--}}
                        {{--removeOldSelect( $(el) );--}}
                        {{--if( $(el).next().is('select') ){--}}
                            {{--$('option[value != "0"]' ,$(el).next()).remove();--}}
                            {{--$.each(r, function(i, n){--}}
                                {{--$(el).next().append('<option value="'+i+'">'+n+'</option>');--}}
                            {{--});--}}
                        {{--} else {--}}
                            {{--$(el).after($(el).clone(true));--}}
                            {{--$(el).attr( {'id':null, 'name':null} );--}}
                            {{--$('option[value != "0"]', $(el).next()).remove();--}}
                            {{--$.each(r, function(i, n){--}}
                                {{--$(el).next().append('<option value="'+i+'">'+n+'</option>');--}}
                            {{--});--}}
                        {{--}--}}

                    {{--} else {--}}
                        {{--$(el).after($(el).clone(true));--}}
                        {{--$(el).attr( {'id':null, 'name':null} );--}}
                        {{--$('option[value != "0"]', $(el).next()).remove();--}}
                        {{--$.each(r, function(i, n){--}}
                            {{--$(el).next().append('<option value="'+i+'">'+n+'</option>');--}}
                        {{--});--}}
                    {{--}--}}

                {{--} else {--}}
                    {{--if( $(el).is('select') ){--}}
                        {{--removeOldSelect( $(el) );--}}
                    {{--}--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--}--}}
    {{--</script>--}}
    {{--@endif--}}

    <table class="table table-striped">
        <tr>
            @foreach( Config::get('Admin::view/'.$_curent_controller) as $field => $config )
            @if( isset( $config['grid']['show'] ) && $config['grid']['show'] )
            <th>{{ Lang::get($_curent_controller.'.'.$field) }}</th>
            @endif
            @endforeach
            <th><a href="{{ URL::route($_curent_controller.'.create') }}"><span class="glyphicon glyphicon-plus"></span></a></th>
        </tr>
        @foreach( $item as $row )
        <tr>

            @foreach( Config::get('Admin::view/'.$_curent_controller) as $field =>  $config )
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
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.show', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.edit', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ URL::route($_curent_controller.'.destroy', array('id'=>$row->id))  }}">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
                {{--{{ Form::model($item, array('method' => 'DELETE', 'route' => array($_curent_controller.'.destroy', $row->id))); }}--}}
                    {{--{{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array( 'type' => 'submit', 'class' => 'btn btn-default btn-xs')) }}--}}
                {{--{{ Form::close() }}--}}
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