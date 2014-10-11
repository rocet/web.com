{{ Form::open(array(
    'route' => 'changePassword',
    'autocomplete' => 'off'
)) }}
    {{ Form::label('password', Lang::get('user.password')) }}
    {{ Form::password('password', array(
        'placeholder' => '••••••••••'
    )) }}
    {{ Form::label('password-confirm', Lang::get('user.password-confirm')) }}
    {{ Form::password('password-confirm', array(
        'placeholder' => '••••••••••'
    )) }}
    @if ($error = $errors->first('account'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    @if ($error = $errors->first('password-confirm'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    {{ Form::submit(Lang::get('user.save')) }}
{{ Form::close() }}