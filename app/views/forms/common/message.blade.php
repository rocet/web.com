<h2>MESSAGE</h2>
@if(Session::get('message'))
    {{ Session::get('message') }}
@elseif( $message )
    {{ dd( $message ) }}
@endif