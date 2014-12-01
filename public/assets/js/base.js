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
    $.each($('.tree[data-init]'), function(i, n) {
        var that = $(n);
        that.treeview({data: eval("("+that.attr('data-init')+")") });
    });
};