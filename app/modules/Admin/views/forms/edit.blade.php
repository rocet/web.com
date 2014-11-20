@if( isset($item) )
{{ Form::model($item, array('route' => array('group.update', $item->id))); }}
{{ Form::hidden('id') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}
@endif