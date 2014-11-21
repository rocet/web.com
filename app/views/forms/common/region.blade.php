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
<select class="region" onchange="region(this);">
	<option>{{ Lang::get('user.select') }}</option>
	@foreach ( Region::selections('region_name', 0) as $key => $province )
	<option value="{{ $key }}">{{ $province }}</option>
	@endforeach
</select>
<select class="region" onchange="region(this);">
	<option value="110000">{{ Lang::get('user.select') }}</option>
	@foreach ( Region::selections('region_name', 110000) as $key => $city)
	<option value="{{ $key }}">{{ $city }}</option>
	@endforeach
</select>
<select class="region" onchange="region(this);">
	<option value="110100">{{ Lang::get('user.select') }}</option>
	@foreach ( Region::selections('region_name', 110100) as $key => $town)
	<option value="{{ $key }}">{{ $town }}</option>
	@endforeach
</select>


