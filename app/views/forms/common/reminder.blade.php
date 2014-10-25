{{ Form::open(array(
    'route' => 'reminder',
    'autocomplete' => 'off'
)) }}
    {{ Form::label('account', Lang::get('user.account') )}}
    {{ Form::text('account', Input::get('account'), array(
        'placeholder' => Lang::get('user.account_type')
    )) }}
    @if ($error = $errors->first('account'))
        <div class='account'>
            {{ $error }}
        </div>
    @endif
    @if ($error = $errors->first('sys_error'))
        <div class='error'>
            {{ $error }}
        </div>
    @endif
    {{ Form::submit(Lang::get('user.reminder')) }}
{{ Form::close() }}