{{ Form::open(array(
    'route' => 'login',
    'autocomplete' => 'off'
)) }}
    {{ Form::label('account', Lang::get('user.account')) }}
    {{ Form::text('account', Input::get('account'), array(
        'placeholder' => Lang::get('user.account_type')
    )) }}
    {{ Form::label('password', Lang::get('user.password')) }}
    {{ Form::password('password', array(
        'placeholder' => '••••••••••'
    )) }}
    {{ Form::label('remember', Lang::get('user.remember_me')) }}
    {{ Form::checkbox('remember', '1', false) }}
    @if ($error = $errors->first('account'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    @if ($error = $errors->first('password'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    {{ Form::submit(Lang::get('user.login')) }}
{{ Form::close() }}