@if( Config::get('Admin::view/'.$_curent_controller) )
{{ Form::open(array( 'route' => $_curent_controller.'.store', 'autocomplete' => 'off' )) }}
@foreach( Config::get('Admin::view/'.$_curent_controller) as $field => $config )
@if( isset( $config['form']['show'] ) && $config['form']['show'] )
    @if( $config['form']['type'] != 'hidden' )
    {{ Form::label($field, Lang::get($_curent_controller.'.'.$field)) }}
    @endif

    @if( in_array( $config['form']['type'], array('select', 'treeSelect', 'regionSelect') ) )
    {{ Form::$config['form']['type']($field, isset($config['form']['options']) ? $config['form']['options'] : array(), Input::get($field) ?: (isset($config['form']['value']) ? $config['form']['value'] : '') , array( 'placeholder' => Lang::get($_curent_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array()), isset($config['form']['option_model']) ? $config['form']['option_model'] : array()  ) }}

    @else
    {{ Form::$config['form']['type']($field, Input::get($field) ?: (isset($config['form']['value']) ? $config['form']['value'] : ''), array( 'placeholder' => Lang::get($_curent_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array()) ) }}
    @endif

    @if ($error = $errors->first($field))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
@endif
@endforeach
    {{ Form::submit(Lang::get($_curent_controller.'.create')) }}
{{ Form::close() }}

<script type="text/javascript">
window.onload = function(){
    function removeOldSelect(el){
        if( el.next().is('select') ){
            if( el.next().attr('id') ){
                el.attr( {'id':el.next().attr('id'), 'name':el.next().attr('name')} );
            }
            el.next().remove();
            removeOldSelect( el );
        } else {
            return 0;
        }
    }
    $('select[data-src]').on('change', function(){
        var el = this;
        $.get($(el).attr('data-src')+'&pid='+el.value, function(r){
            if( Object.keys(r).length ){
                if( $(el).next().is('select') ){
                    removeOldSelect( $(el) );
                    if( $(el).next().is('select') ){
                        $('option[value != "0"]' ,$(el).next()).remove();
                        $.each(r, function(i, n){
                            $(el).next().append('<option value="'+i+'">'+n+'</option>');
                        });
                    } else {
                        $(el).after($(el).clone(true));
                        $(el).attr( {'id':null, 'name':null} );
                        $('option[value != "0"]', $(el).next()).remove();
                        $.each(r, function(i, n){
                            $(el).next().append('<option value="'+i+'">'+n+'</option>');
                        });
                    }

                } else {
                    $(el).after($(el).clone(true));
                    $(el).attr( {'id':null, 'name':null} );
                    $('option[value != "0"]', $(el).next()).remove();
                    $.each(r, function(i, n){
                        $(el).next().append('<option value="'+i+'">'+n+'</option>');
                    });
                }

            } else {
                if( $(el).is('select') ){
                    removeOldSelect( $(el) );
                }
            }
        });
    });
}
</script>

@else
<div class="alert alert-warning">NO CONFIG </div>
@endif

