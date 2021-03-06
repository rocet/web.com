{{ Form::open(array(
    'route' => 'reset',
    'autocomplete' => 'off'
)) }}
    {{ Form::label('password', Lang::get('user.password') )}}
    {{ Form::password('password', array(
        'placeholder' => '••••••••••'
    )) }}
    @if ($error = $errors->first('password'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    {{ Form::label('password_confirm', Lang::get('user.password_confirm') )}}
    {{ Form::password('password_confirm', array(
        'placeholder' => '••••••••••'
    )) }}
    @if ($error = $errors->first('password_confirm'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    @if ($error = $errors->first('sys_error'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    {{ Form::submit(Lang::get('user.reset')) }}
{{ Form::close() }}