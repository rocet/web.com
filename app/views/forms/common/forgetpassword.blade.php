{{ Form::open(array(
    'route' => 'forgetPassword',
    'autocomplete' => 'off'
)) }}
    {{ Form::label('account', Lang::get('user.account') )}}
    {{ Form::text('account', Input::get('account'), array(
        'placeholder' => Lang::get('user.account_type')
    )) }}
    @if ($error = $errors->first('email'))
        <div class='account'>
            {{ $error }}
        </div>
    @endif
    {{ Form::submit(Lang::get('user.reset')) }}
{{ Form::close() }}