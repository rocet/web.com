{{ Form::open(array(
    'url' => URL::action('App\External\Media\Controllers\MediaController@store', array('id'=>$item->first()->item('Article')->first()->id)),
    'autocomplete' => 'off'
)) }}
{{ Form::hidden('user_id', Auth::id()) }}
{{ Form::hidden('item_id', $item->first()->item('Article')->first()->id) }}
{{ Form::hidden('component_id', $item->first()->item('Article')->first()->category->component->id) }}
{{ Form::label('content', Lang::get('Media::comment.content')) }}
{{ Form::textarea('content', Input::get('content'), array(
    'placeholder' => Lang::get('Media::comment.content')
)) }}

{{ Form::submit(Lang::get('Media::comment.create')) }}
{{ Form::close() }}