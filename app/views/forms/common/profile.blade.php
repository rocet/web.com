{{ Form::open(array(
        'url' => URL::route('profile'),
        'autocomplete' => 'off'
    )) }}
    @foreach ( Auth::user()->toArray() as $field => $value )
    @if( !in_array($field, array('created_at', 'updated_at', 'deleted_at', 'remember_token', 'state')) )
    @if ($field == 'id')
    {{ Form::hidden($field, $value) }}
    @else
    {{ Form::label($field, Lang::get('user.'.$field) )}}
        {{ Form::text($field, $value, array(
            'placeholder' => Lang::get('user.'.$field)
        )) }}
        @if ($error = $errors->first($field))
            <div class='error'>
                {{ $error }}
            </div>
        @endif
    @endif
    @endif
    @endforeach
    {{ Form::submit(Lang::get('user.save')) }}
{{ Form::close() }}