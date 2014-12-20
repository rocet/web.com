@if( $item->isEmpty() )
    media index Empty !!!
@else
    @foreach( $item as $media )
        <ul class="list-group">
            <li class="list-group-item"> id : {{ $media->id }} </li>
            <li class="list-group-item"> title : {{ $media->title }} </li>
            <li class="list-group-item"> description : {{ $media->description }} </li>
            <li class="list-group-item"> path : {{ $media->path }} </li>
            <li class="list-group-item"> sort : {{ $media->sort }} </li>
            <li class="list-group-item"> created_at : {{ $media->created_at }} </li>
            <li class="list-group-item"> user_id : {{ $media->user_id }} </li>
            <li class="list-group-item"> user_name : {{ $media->user->user_name }}
            <li class="list-group-item"> user_link : <a href="{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$media->user_id)) }}">{{ URL::action('App\External\Member\Controllers\UserController@show', array('id'=>$media->user_id)) }}</a>  </li>
            @if(Auth::id() == $media->user_id )
            <li class="list-group-item"> edit_link : <a href="{{ URL::route('user.medias.edit', array('user' => $media->user_id, 'article'=>$media->id)) }}">{{ URL::route('user.medias.edit', array('user' => $media->user_id, 'article'=>$media->id)) }}</a>  </li>
            <li class="list-group-item"> destroy_link : <a href="{{ URL::route('user.medias.destroy', array('user' => $media->user_id, 'article'=>$media->id)) }}">{{ URL::route('user.medias.destroy', array('user' => $media->user_id, 'article'=>$media->id)) }}</a>  </li>
            @endif
        </ul>
    @endforeach
@endif
member media index