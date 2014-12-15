{{ Form::open(array(
    'url' => URL::action('App\External\Comment\Controllers\CommentController@store', array('id'=>$item->first()->item('Article')->first()->id)),
    'autocomplete' => 'off'
)) }}
{{ Form::hidden('user_id', Auth::id()) }}
{{ Form::hidden('item_id', $item->first()->item('Article')->first()->id) }}
{{ Form::hidden('component_id', $item->first()->item('Article')->first()->category->component->id) }}
{{ Form::label('content', Lang::get('Comment::comment.content')) }}
{{ Form::textarea('content', Input::get('content'), array(
    'placeholder' => Lang::get('Comment::comment.content')
)) }}

{{ Form::submit(Lang::get('Comment::comment.create')) }}
{{ Form::close() }}