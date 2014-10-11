{{ Form::open(array(
        'url' => URL::route('register'),
        'autocomplete' => 'off'
    )) }}
        {{ Form::label('account', Lang::get('user.account') )}}
        {{ Form::text('account', Input::get('account'), array(
            'placeholder' => Lang::get('user.account_type')
        )) }}
        {{ Form::label('password', Lang::get('user.password') )}}
        {{ Form::password('password', array(
            'placeholder' => '••••••••••'
        )) }}
        {{ Form::label('password-confirm', Lang::get('user.password-confirm') )}}
        {{ Form::password('password-confirm', array(
            'placeholder' => '••••••••••'
        )) }}
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
        @if ($error = $errors->first('password-confirm'))
            <div class='error'>
                {{ $error }}
            </div>
        @endif
        {{ Form::submit(Lang::get('user.regist')) }}
    {{ Form::close() }}