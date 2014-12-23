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
                    $('option[value = "0"]', $(el).next()).val(el.value);
                    $.each(r, function(i, n){
                        $(el).next().append('<option value="'+i+'">'+n+'</option>');
                    });
                } else {
                    $(el).after($(el).clone(true));
                    $(el).attr( {'id':null, 'name':null} );
                    $('option[value != "0"]', $(el).next()).remove();
                    $('option[value = "0"]', $(el).next()).val(el.value);
                    $.each(r, function(i, n){
                        $(el).next().append('<option value="'+i+'">'+n+'</option>');
                    });
                }

            } else {
                $(el).after($(el).clone(true));
                $(el).attr( {'id':null, 'name':null} );
                $('option[value != "0"]', $(el).next()).remove();
                $('option[value = "0"]', $(el).next()).val(el.value);
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
var attachment = {
    editor:null,
    init:function(editorid,keyid,attachcallback,params){
        var _editor =this.getEditor(editorid);
        _editor.ready(function () {
            //_editor.setDisabled();
            _editor.execCommand('serverparam', params);
            _editor.hide();
            _editor.addListener(attachcallback, function (t, args) {
                $("#"+keyid).val(args[0].src);
                $("#"+keyid+"image").attr('src', args[0].src);
            });
        });
    },
    getEditor:function(editorid){
        this.editor = UE.getEditor(editorid,{textarea : ''});
        return this.editor;
    },
    show:function(id,attachtype){
        var _editor = this.editor;
        $("#"+id).click(function(){
            var attachment = _editor.getDialog(attachtype);
            attachment.render();
            attachment.open();
        });
    },
    render:function(editorid){
        var _editor = this.getEditor(editorid);
        _editor.render();
    }
};
