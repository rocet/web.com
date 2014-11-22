@if( isset($item) )
@if( Config::get('Admin::view/'.$_curent_controller) )
{{ Form::model($item, array('method' => 'PUT', 'route' => array($_curent_controller.'.update', $item->id))); }}
@foreach( Config::get('Admin::view/'.$_curent_controller) as $field => $config )
@if( isset( $config['form']['show'] ) && $config['form']['show'] )

    @if( $config['form']['type'] != 'hidden' )
    {{ Form::label($field, Lang::get($_curent_controller.'.'.$field)) }}
    @endif

    @if( $config['form']['type'] == 'select' )
    {{ Form::$config['form']['type']($field, $config['form']['options'], Input::get($field) ?: $item->$field ?: (isset($config['form']['value']) ? $config['form']['value'] : '') , array( 'placeholder' => Lang::get($_curent_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array())  ) }}
    @elseif( $config['form']['type'] == 'region' )
    @include( 'forms.common.region' )
    {{ Form::hidden($field, Input::get($field) ?: $item->$field ?: (isset($config['form']['value']) ? $config['form']['value'] : ''), isset($config['form']['attr']) ? $config['form']['attr'] : array() ) }}

    @else
    {{ Form::$config['form']['type']($field, Input::get($field) ?: $item->$field ?: (isset($config['form']['value']) ? $config['form']['value'] : ''), array( 'placeholder' => Lang::get($_curent_controller.'.'.$field) ) + (isset($config['form']['attr']) ? $config['form']['attr'] : array()) ) }}
    @endif

    @if ($error = $errors->first($field))
        <div class='error'>
            {{ $error }}
        </div>
    @endif

@endif
@endforeach
{{ Form::submit('Submit') }}
{{ Form::close() }}
@else
<div class="alert alert-warning">NO CONFIG </div>
@endif
@endif