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

    {{ Form::label('type', Lang::get('CustomMeta::custommeta.type')) }}
    <div class="input-group col-xs-6">
            <span class="input-group-addon" id="basic-addon1" style=" padding: 0; ">
                <input type="text" class="input-group-addon" style=" padding: 8px; width: 100px; border: 0; background: #ffffff;">
            </span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            <span class="input-group-btn">
                <sapn class="btn btn-default" type="button">Go!</sapn>
            </span>
        </div>
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
    .be-multi-plus, .be-multi-minus{
        margin: 0 5px;
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
                'submit':['value', 'options']
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
                $('#custom-meta-attributes').append('<label for="'+metaType+n+'">'+trans[n]+'</label><input class="form-control" type="text" name="attributes['+n+']'+('options,list,attributes'.indexOf(n) !== -1 || 'checkboxvalue,radiovalue'.indexOf(metaType+n) !== -1 ? '[]' : '')+'" id="'+metaType+n+'" />'+ ('options,list,attributes'.indexOf(n) !== -1 || 'checkboxvalue,radiovalue'.indexOf(metaType+n) !== -1 ? '<span class="be-multi-plus"><i class="fa fa-plus"></i></span>' : '')  );
            });
            $('#custom-meta-attributes').on('click', 'span.be-multi-plus', function(){
                var el = $($(this).prev().get(0).outerHTML);
                el.attr({text:'', value:'', name:function(){ return this.name.substring(0, this.name.indexOf(']['))+'][]'; } });
                $(this).after('<span class="be-multi-minus"><i class="fa fa-minus"></i></span>').after(el);
            });
            $('#custom-meta-attributes').on('click', 'span.be-multi-minus', function(){
                $(this).prev().remove();
                $(this).remove();
            });
        });
        $('#custom_meta').on('submit', 'form', function(){
            if( this.type.value !== '0' ){
                var that = this, valid = 1;
                for(var i=that.length-1;i>0;i--){
                    if(that[i].name.indexOf('[]') === -1 ){
                        if(!$.trim(that[i].value)){
                            that[i].focus();
                            valid = 0;
                        }
                    }
                }
                if(valid){
                    for(var i=that.length-1;i>0;i--){
                        if(that[i].name.indexOf('[]') !== -1 ) {
                            if (!$.trim(that[i].value)) {
                                if ($(that[i]).next().is('span')) {
                                    $(that[i]).next().remove();
                                }
                                $(that[i]).remove();
                            } else {
                                if (that[i].value.indexOf('=')) {
                                    that[i].name = that[i].name.substring(0, that[i].name.indexOf('[]')) + '[' + that[i].value.substring(0, that[i].value.indexOf('=')) + ']';
                                    that[i].value = that[i].value.substring(that[i].value.indexOf('=')).substring(1);
                                }
                            }
                        }
                    }
                    $.post(this.action, $(that).serialize(), function(res) {
                        var el = $(res);
                        el.addClass('form-control');
                        el.attr('name', 'custommeta[' + el.attr('name') + ']' );
                        $('#current-main-form input[type="submit"]').before('<label for="'+el.attr('name')+'">'+that.label.value+'</label>').before(el).before('<span class="be-multi-minus"><i class="fa fa-minus"></i></span>');
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