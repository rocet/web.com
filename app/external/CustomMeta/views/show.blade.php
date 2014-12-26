<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/23
 * Time: 11:54
 */
?>

<div id="custom_meta" class="panel-body">
    {{ Form::open(array('class' => 'form-inline', 'url' => URL::route('custommeta'), 'autocomplete' => 'off' )) }}
        @if( isset($item) && $item instanceof Eloquent )
        {{ Form::hidden('item_id', $item->id) }}
        @endif
        {{ Form::hidden('user_id', Auth::id()) }}
        {{ Form::hidden('component_id', array_search($_current_component, Config::get('Member::member.components') ) ) }}
        {{ Form::label('type', Lang::get('CustomMeta::custommeta.type')) }}
        {{ Form::select('type', array('请选择', 'input' => '输入框', 'text' => '字符串', 'password' => '密码框', 'hidden' => '隐藏域', 'email' => '邮箱地址', 'url' => '网址', 'file' => '文件上传', 'textarea' => '文本域', 'number' => '数字', 'select' => '下拉框', 'selectRange' => '范围下拉框', 'selectYear' => '年下拉框', 'selectMonth' => '月下拉框', 'checkbox' => '复选框', 'radio' => '单选按钮', 'reset' => '重置按钮', 'image' => '图片', 'submit' => '提交按钮', 'button' => '按钮', 'editor' => '编辑器', 'mediaSelect' => '附件/图片', 'regionSelect' => '地区', 'treeSelect' => '分类'), 0, array('class'=>'form-control')) }}


        {{--{{ Form::label('custom_meta', Lang::get('CustomMeta::custommeta.config')) }}--}}
        {{--{{ Form::label('field', Lang::get('CustomMeta::custommeta.field')) }}--}}
        {{--{{ Form::text('field', '', array('class'=>'form-control')) }}--}}
        {{--{{ Form::label('val', Lang::get('CustomMeta::custommeta.val')) }}--}}
        {{--{{ Form::text('val', '', array('class'=>'form-control')) }}--}}
        {{--{{ Form::label('defval', Lang::get('CustomMeta::custommeta.defval')) }}--}}
        {{--{{ Form::text('defval', '', array('class'=>'form-control')) }}--}}
        {{ Form::label('label', Lang::get('CustomMeta::custommeta.label')) }}
        {{ Form::text('label', '', array('class'=>'form-control')) }}
        {{ Form::label('searchable', Lang::get('CustomMeta::custommeta.searchable')) }}
        {{ Form::radio('searchable', 'true', true, array('class'=>'form-control')) }} 是
        {{ Form::radio('searchable', 'false', false, array('class'=>'form-control')) }} 否
        {{ Form::label('showable', Lang::get('CustomMeta::custommeta.showable')) }}
        {{ Form::radio('showable', 'true', true, array('class'=>'form-control')) }} 是
        {{ Form::radio('showable', 'false', false, array('class'=>'form-control')) }} 否
        {{ Form::submit(Lang::get('CustomMeta::custommeta.create'), array('class' => 'btn btn-primary pull-right')) }}
    {{ Form::close() }}
</div>
<style>
    #custom_meta {
        height: 0;
        padding: 0;
        overflow: hidden;
        
        -webit-transition: 400ms ease-out;
        -moz-transition: 400ms ease-out;
        -o-transition: 400ms ease-out;
        -ms-transition: 400ms ease-out;
        transition: 400ms ease-out;
    }
    #custom_meta.active {
        height: inherit;
        padding: 15px;
        border-bottom: 1px solid #ddd;

        -webit-transition: 400ms ease-out;
        -moz-transition: 400ms ease-out;
        -o-transition: 400ms ease-out;
        -ms-transition: 400ms ease-out;
        transition: 400ms ease-out;
    }
    #custom-meta-attributes .input-group{
        margin: 15px 0;
    }
    .input-group-addon input[type="text"]{
        width: 100px;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        border-right: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .input-group-addon input[type="text"]:focus{
        border-right: 1px solid #ccc;
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    }
    #current-main-form .be-multi-minus {
        margin: 0 15px;
    }
</style>
<script>
    dumpScripts.s10 = function(){
        $('.panel-heading').on('click', 'span.custom-meta-btn', function(){
            $('#custom_meta').toggleClass('active');
        });
        $('#custom_meta form').on('change', 'select[name="type"]', function(){
            $('#custom-meta-attributes').remove();
            $('#custom_meta #label').val('');
            var types = {
                'input':['type', 'name', 'value', 'options'],
                'select':['name', 'list', 'selected', 'options'],
                'selectRange':['name', 'begin', 'end', 'selected', 'options'],
                'selectMonth':['name', 'selected', 'options', 'format'],
                'checkbox':['name', 'value', 'checked', 'options'],
                'image':['url', 'name', 'attributes'],
                'text':['name', 'value', 'options'],
                'password':['name','options'],
                'reset':['value', 'attributes'],
                'submit':['value', 'options'],
                'treeSelect':['name', 'list', 'selected', 'options'],
                'regionSelect':['name', 'list', 'selected', 'options'],
                'editor':['name','value', 'attributes'],
                'mediaSelect':['name','value', 'attributes']
            };
            types.radio = types.checkbox;
            types.hidden = types.text;
            types.email = types.text;
            types.url = types.text;
            types.textarea = types.text;
            types.number = types.text;
            types.file = types.reset;
            types.button = types.submit;
            var trans = {'type':'类型','name':'字段名','value':'值','options':'HTML Tag 属性','list':'下拉内容','selected':'选中值','begin':'开始值','end':'结束值','format':'格式化','checked':'选中','attributes':'属性值','url':'网址'};
            var metaType = this.value;
            if(undefined === types[metaType]){
                return false;
            }
            $(this).after('<div id="custom-meta-attributes"></div>');
            $.each(types[metaType], function(i,n){
                var el = '<label for="'+metaType+n+'">'+trans[n]+'</label>';
                if( 'options,list,attributes'.indexOf(n) !== -1 || 'checkboxvalue,radiovalue'.indexOf(metaType+n) !== -1 ) {
                    el += '<div data-multindex="0" class="input-group col-xs-6">' +
                    '<span class="input-group-addon" style=" padding: 0; border: 0; "><input type="text" class="be-multi-key" placeholder="属性名"></span>' +
                    '<input type="text" class="form-control be-multi-val" name="attributes['+n+'][0]" id="'+metaType+n+'" placeholder="属性值">' +
                    '<span class="input-group-btn"><sapn class="btn btn-default be-multi-plus"><i class="fa fa-plus"></i></sapn></span></div>';
                } else {
                    el += '<input class="form-control" type="text" name="attributes['+n+']" id="'+metaType+n+'" />';
                }
                $('#custom-meta-attributes').append(el);
            });
            $('#custom-meta-attributes .input-group-addon').on('change', '.be-multi-key', function(){
                var valel = $(this).parent('.input-group-addon').next('.be-multi-val');
                var name = valel.attr('name').substring(0, valel.attr('name').indexOf(']['));
                valel.attr('name',  name + '][' + $(this).val() + ']' );
            });
            $('#custom-meta-attributes .input-group-btn').on('click', '.be-multi-plus', function(){
                var tarparent = $(this).parent('span.input-group-btn').parent('div.input-group');
                var multindex = (tarparent.next().attr('data-multindex') == undefined ? parseInt(tarparent.attr('data-multindex')) + 1 : parseInt( tarparent.next().attr('data-multindex') ) + 1 );
                var el = $(tarparent.get(0).outerHTML);
                el.attr('data-multindex', multindex);
                $('.be-multi-val', el).attr({text:'', value:'', name:function(){ return this.name.substring(0, this.name.indexOf(']['))+']['+multindex+']'; } });
                $('.be-multi-plus', el).removeClass('be-multi-plus').addClass('be-multi-minus');
                $('.be-multi-minus i.fa-plus', el).removeClass('fa-plus').addClass('fa-minus');
                tarparent.after(el);


                $('#custom-meta-attributes .input-group-addon').on('change', '.be-multi-key', function(){
                    var valel = $(this).parent('.input-group-addon').next('.be-multi-val');
                    var name = valel.attr('name').substring(0, valel.attr('name').indexOf(']['));
                    valel.attr('name',  name + '][' + $(this).val() + ']' );
                });


                $('#custom-meta-attributes .input-group-btn').on('click', '.be-multi-minus', function(){
                    $(this).parent('span.input-group-btn').parent('div.input-group').remove();
                });
            });
        });
        $('#custom_meta').on('submit', 'form', function(){
            if( this.type.value !== '0' ){
                var that = this, valid = 1;
                for(var i=that.length-1;i>0;i--){
                    if(that[i].name && that[i].name.indexOf('][') === -1 ){
                        if(!$.trim(that[i].value)){
                            that[i].focus();
                            valid = 0;
                        }
                    }
                }
                if(valid){
                    for(var i=that.length-1;i>0;i--){
                        if(that[i].name.indexOf('][') !== -1 ) {
                            if (!$.trim(that[i].value)) {
                                if ($(that[i]).parent().is('.input-group')) {
                                    $(that[i]).parent().prev('label').remove();
                                    $(that[i]).parent('.input-group').remove();
                                }
                            }
                        }
                    }
                    $.post(this.action, $(that).serialize(), function(res) {
                        var el = $(res);
//                        if( that.type.value == 'editor' ){
//                            $('#ue-editor #editor', el).addClass('form-control');
//                            $('#ue-editor #editor', el).attr('name', 'custommeta[' + el.attr('name') + ']' );
//                        } else {
//                        }
                        el.addClass('form-control');
                        el.attr('name', 'custommeta[' + el.attr('name') + ']' );
                        $('#current-main-form input[type="submit"]').before('<label for="'+el.attr('name')+'">'+that.label.value+'</label>').before(el).before('<span class="btn btn-default be-multi-minus"><i class="fa fa-minus"></i></span>');
                        $('#current-main-form').on('click', 'span.be-multi-minus', function(){
                            $(this).prev().prev('label').remove();
                            $(this).prev().remove();
                            $(this).remove();
                        });
                    });
                }
            }
            return false;
        });
    };

</script>