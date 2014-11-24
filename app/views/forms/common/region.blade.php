<script type="text/javascript">
    function region(el){
        var nextEl = el.nextElementSibling || el.nextSibling;
        if( nextEl.id == '{{ $field }}' ){
            nextEl.value = el.value;
        } else {
            $.get("{{ URL::route('selections') }}", {model:'region', field:'region_name', pid: el.value}, function(res){
                $(nextEl).html('<option value="'+el.value+'">{{ Lang::get('user.select') }}</option>');
                $.each(res, function(i, n){
                    $(nextEl).append('<option value="'+i+'">'+n+'</option>');
                });
            });
        }
    }
</script>

{{ Form::select(null, Region::selections('region_name', 0), 0, array( 'class' => 'region', 'onchange' => 'region(this);' )) }}
{{ Form::select(null, Region::selections('region_name', 110000), 110000, array( 'class' => 'region', 'onchange' => 'region(this);' )) }}
{{ Form::select(null, Region::selections('region_name', 110100), 110100, array( 'class' => 'region', 'onchange' => 'region(this);' )) }}


