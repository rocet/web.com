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

        <script type="text/javascript">
        window.onload = function(){
            function removeOldSelect(el){
                if( el.next().is('select') ){
                    if( el.next().attr('id') ){
                        el.attr( {'id':el.next().attr('id'), 'name':el.next().attr('name')} );
                    }
                    el.next().remove();
                    removeOldSelect( el );
                } else {
                    return 0;
                }
            }
            $('select[data-src]').on('change', function(){
                var el = this;
                $.get($(el).attr('data-src')+'&pid='+el.value, function(r){
                    if( Object.keys(r).length ){
                        if( $(el).next().is('select') ){
                            removeOldSelect( $(el) );
                            if( $(el).next().is('select') ){
                                $('option[value != "0"]' ,$(el).next()).remove();
                                $.each(r, function(i, n){
                                    $(el).next().append('<option value="'+i+'">'+n+'</option>');
                                });
                            } else {
                                $(el).after($(el).clone(true));
                                $(el).attr( {'id':null, 'name':null} );
                                $('option[value != "0"]', $(el).next()).remove();
                                $.each(r, function(i, n){
                                    $(el).next().append('<option value="'+i+'">'+n+'</option>');
                                });
                            }

                        } else {
                            $(el).after($(el).clone(true));
                            $(el).attr( {'id':null, 'name':null} );
                            $('option[value != "0"]', $(el).next()).remove();
                            $.each(r, function(i, n){
                                $(el).next().append('<option value="'+i+'">'+n+'</option>');
                            });
                        }

                    } else {
                        if( $(el).is('select') ){
                            removeOldSelect( $(el) );
                        }
                    }
                });
            });
        }
        </script>
        @elseif ($field == 'group_id')
        {{ Form::select('group_id', Group::selections('group_name')) }}
        @elseif ($field == 'orgnaze_id')
        {{ Form::select('orgnaze_id', Orgnaze::selections('orgnaze_name')) }}
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