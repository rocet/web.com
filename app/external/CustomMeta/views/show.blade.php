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
        {{ Form::hidden('item_id', '', '') }}
        {{ Form::hidden('user_id', '', '') }}
        {{ Form::hidden('component_id', '', '') }}
        {{ Form::label('type', Lang::get('CustomMeta::custommeta.type')) }}
        {{ Form::select('type', array('请选择', 'input' => '输入框', 'text' => '字符串', 'password' => '密码框', 'hidden' => '隐藏域', 'email' => '邮箱地址', 'url' => '网址', 'file' => '文件上传', 'textarea' => '文本域', 'number' => '数字', 'select' => '下拉框', 'selectRange' => '范围下拉框', 'selectYear' => '年下拉框', 'selectMonth' => '月下拉框', 'checkbox' => '复选按钮', 'radio' => '单选按钮', 'reset' => '重置按钮', 'image' => '图片', 'submit' => '提交按钮', 'button' => '按钮', 'editor' => '编辑器', 'mediaSelect' => '附件/图片', 'regionSelect' => '地区', 'treeSelect' => '分类'), 0, array('class'=>'form-control')) }}
        {{ Form::label('custom_meta', Lang::get('CustomMeta::custommeta.config')) }}

        {{ Form::label('field', Lang::get('CustomMeta::custommeta.field')) }}
        {{ Form::text('field', '', array('class'=>'form-control')) }}
        {{ Form::label('defval', Lang::get('CustomMeta::custommeta.defval')) }}
        {{ Form::text('defval', '', array('class'=>'form-control')) }}
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
</style>
<script>
    dumpScripts.s10 = function(){
        $('.panel-heading').on('click', 'span.custom-meta-btn', function(){
            $('#custom_meta').toggleClass('active');
        });
        $('#custom_meta form').on('change', 'select[name="type"]', function(){
            console.log(this.value);
        });
        $('#custom_meta').on('submit', 'form', function(){
            $.post(this.action, $(this).serialize(), function(res) {
                $('#current-main-form input[type="submit"]').before($('<p>'+res.type+'</p>'));
            });
            return false;
        });
    };

</script>