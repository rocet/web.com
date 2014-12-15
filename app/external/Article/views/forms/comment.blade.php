{{ Form::open(array(
    'url' => URL::action('App\External\Comment\Controllers\CommentController@store', array('id'=>$item->id)),
    'autocomplete' => 'off'
)) }}

{{ Form::label('content', Lang::get('Comment::comment.content')) }}
{{ Form::textarea('content', Input::get('content'), array(
    'placeholder' => Lang::get('Comment::comment.content')
)) }}

{{ Form::submit(Lang::get('Comment::comment.create')) }}
{{ Form::close() }}