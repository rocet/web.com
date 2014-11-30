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
@else
<div class="alert alert-warning">NO CONFIG </div>
@endif

