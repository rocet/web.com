{{ Form::open(array(
    'url' => URL::action('App\External\Media\Controllers\Member\MediaController@store', array('id'=>$item->id)),
    'autocomplete' => 'off'
)) }}
    {{ Form::hidden('user_id', Auth::id()) }}
    {{ Form::hidden('item_id', $item->item_id) }}
    {{ Form::label('title', Lang::get('Media::media.title')) }}
    {{ Form::text('title', $item->title, array(
        'placeholder' => Lang::get('Media::media.title')
    )) }}
    {{ Form::label('description', Lang::get('Media::media.description')) }}
    {{ Form::textarea('description', $item->description, array(
        'placeholder' => Lang::get('Media::media.description')
    )) }}
    {{ Form::label('path', Lang::get('Media::media.path')) }}
    {{ Form::textarea('path', $item->path, array(
        'placeholder' => Lang::get('Media::media.path')
    )) }}

    {{ Form::submit(Lang::get('Media::media.edit')) }}
{{ Form::close() }}
    member media edit