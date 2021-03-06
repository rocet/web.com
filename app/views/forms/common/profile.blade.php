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
        @if ($field == 'region_id')
        {{ Form::regionSelect('region_id', array('请选择'), Auth::user()->region_id ,  array('data-src' => URL::route('selections', array('model' => 'region', 'field' => 'region_name')))  ) }}
        @elseif ($field == 'group_id')
        {{ Form::select('group_id', Group::selections('group_name')) }}
        @elseif ($field == 'organization_id')
        {{ Form::select('organization_id', Organization::selections('organization_name')) }}
        @else
        {{ Form::text($field, $value, array(
            'placeholder' => Lang::get('user.'.$field)
        )) }}
        @endif
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