{{ Form::open(array(
    'url' => URL::action('App\External\Tag\Controllers\TagController@store', array('id'=>$item->first()->item('Article')->first()->id)),
    'autocomplete' => 'off'
)) }}
{{ Form::hidden('user_id', Auth::id()) }}
{{ Form::hidden('item_id', $item->first()->item('Article')->first()->id) }}
{{ Form::hidden('component_id', $item->first()->item('Article')->first()->category->component->id) }}
{{ Form::label('title', Lang::get('Tag::tag.title')) }}
{{ Form::textarea('title', Input::get('title'), array(
    'placeholder' => Lang::get('Tag::tag.title')
)) }}

{{ Form::submit(Lang::get('Tag::tag.create')) }}
{{ Form::close() }}