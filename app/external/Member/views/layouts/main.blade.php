<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel PHP Framework</title>
        {{--<base href="http://web.com" />--}}
        {{--<base target="_blank" />--}}
        <link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
        <style>
            form>label{
                clear: left;
                display: block;
                margin: 10px 0;
            }
            aside .panel.panel-default {
                position: fixed;
                left: -80px;
                top: 10%;
                z-index: 99999;
            }
            aside .panel.panel-default ul.list-group {
                height: 0;
                overflow: hidden;
            }
            aside .panel.panel-default ul.list-group.current {
                height: auto;
            }
            aside .panel.panel-default:hover {
                left: 0px;
            }
            p{
                word-wrap: break-word;
            }
            .form-inline select.form-control {
                margin-right: 10px;
            }
            .overflow-x-auto {
                overflow-y: hidden;
            }
            .form-inline label.selectMultiple {
                display: inline;
                clear: left;
                margin: 0 10px;
            }
            .form-inline select[multiple].form-control{
                min-width: 20%;
                height: 260px;
                /*overflow-y: hidden;*/
                margin: 0;
            }
            .form-inline option {
                /*color: brown;*/
                padding: 8px;
                margin: 2px;
                /*border: 1px solid rgb(18, 2, 2);*/
                /*background: goldenrod;*/
            }
            .form-inline option:hover {
                /*color: #ffffff;*/
                /*background: #1273ff;*/
            }

            /*.ruleCheckBoxPanel label.form-inline {*/
            /*display: inline-block;*/
            /*width: 30%;*/
            /*height: 30px;*/
            /*}*/

            ::-webkit-scrollbar {
                width:6px;
                height: 6px;
                /*height:14px;*/
                /*background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(202,202,202,0.07)),color-stop(100%,rgba(229,229,229,0.07)));*/
                /*background:-webkit-linear-gradient(left,rgba(202,202,202,0.07) 0%,rgba(229,229,229,0.07) 100%);*/
                /*background-color:rgba(229,229,229,.3);*/
                /*-webkit-box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset,0 1px 0 0 #fff;*/
                /*box-shadow:0 0 1px  0 rgba(0,0,0,.15) inset,0 1px 0 0 #fff;*/
                overflow:visible;
                border-radius:2px;
                /*border:solid 1px #A6A6A6;*/
            }
            ::-webkit-scrollbar-button {
                width:0;
                height:0; display:block;
                background-color:transparent;
            }
            ::-webkit-scrollbar-thumb {
                background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(233,233,233,0.05)),color-stop(100%,rgba(221,221,221,0.05)));
                background:-webkit-linear-gradient(left,rgba(233,233,233,0.05) 0%,rgba(221,221,221,0.05) 100%);
                -webkit-box-shadow:0 2px 1px 0 rgba(0,0,0,.05),inset 1px 1px 0 0 #FFF;
                box-shadow:0 2px 1px 0 rgba(0,0,0,.05),inset 1px 1px 0 0 #FFF;
                background-color:rgba(229,229,229,.9);
                overflow:visible;
                border-radius:2px;
                border:solid 1px #A6A6A6;
            }
            ::-webkit-scrollbar-thumb:active{
                background-color:rgba(229,229,229,1);
                -webkit-box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset;
                box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset;
            }
            ::-webkit-scrollbar-thumb:hover{
                background-color:rgba(229,229,229,.4);
            }
            ::-webkit-scrollbar-corner {}
            ::-webkit-resizer {}
            ::-webkit-scrollbar-track {}
            ::-webkit-scrollbar-track-piece {}








            .tree li {
                list-style-type:none;
                margin:0;
                padding:10px 5px 0 9px;
                position:relative
            }
            .tree li::before, .tree li::after {
                content:'';
                left:-20px;
                position:absolute;
                right:auto
            }
            .tree li::before {
                border-left:1px solid #999;
                bottom:50px;
                height:100%;
                top:0;
                width:1px
            }
            .tree li::after {
                border-top:1px solid #999;
                height:20px;
                top:25px;
                width:25px
            }
            .tree>li::before, .tree>li::after {
                border: 0;
            }
            .tree li span {
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
                border:1px solid #999;
                border-radius:5px;
                display:inline-block;
                padding:3px 8px;
                text-decoration:none
            }
            .tree li.parent_li>span {
                cursor:pointer
            }
            .tree>ul>li::before, .tree>ul>li::after {
                border:0
            }
            .tree li:last-child::before {
                height:30px
            }
            .tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
                background:#eee;
                border:1px solid #94a0b4;
                color:#000
            }
            .ruleCheckBoxPanel > .btn-group{
                padding: 15px 49px;
            }



            #back-to-top{
                position: fixed;
                right: 0;
                top: 80%;
                display: none;
            }
            #back-to-top i{
                font-size: 30px;
                transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
            }
        </style>
        @if( Config::get('app.debug') )
            <script type="text/javascript">

            Array.prototype.remove = function(val) {
                var index = $.inArray(val, this);
                if (index > -1) {
                    this.splice(index, 1);
                }
            };
            var dumpScripts = {
                init: function(){
                    for(var item in dumpScripts ){
                        if( 'init' != item )
                        eval('dumpScripts.'+item+'();');
                    }
                }
            };

            window.onload = function(){
                dumpScripts.init();
            };

            dumpScripts.s1 = function(){
                $( document ).ajaxComplete(function( event,request, settings ) {
                    console.log( request.responseText );
                });
            };

            dumpScripts.s2 = function(){
                $.each( $('select[data-src][name]'), function(i, n){
                    if(n.value !== "0"){
                        $(n).trigger('change');
                    }
                });
            };

            dumpScripts.s3 = function(){
                var buildCheckBox = function(parent, select, pt, pv){
                    pt = pt == '' ? '' : pt;
                    pv = pv == '' ? '' : pv;
                    parent.append('<ul></ul>');
                    var index = 0;
                    $.each($('option[value != 0]', $(select)), function(i, option){
                        if(option.selected){
                            parent.children('ul').append('<li><span>'+option.text+'</span><label class="form-inline"><input type="checkbox" name="rule" value="'+pv+option.value+'"></label></li>');
                            $('label>input[type="checkbox"]', parent.children('ul').children().eq(index)).prop('checked', (-1 === $.parseJSON($('#rule').val()).indexOf( parseInt( pv+option.value) ) ? false : true) );
                            index ++;
                            if($(select).next().next().is('select[multiple]')){
                                buildCheckBox(parent.children('ul').children().eq(index-1), $(select).next().next(), option.text, pv+option.value);
                            }
                        }
                    });
                };
                $('select[multiple]').change(function(e){
                    var rcp = $('.ruleCheckBoxPanel');
                    rcp.html('<div class="btn-group" role="group"><button type="button" class="btn btn-default" data-action="add">add</button><button type="button" class="btn btn-default" data-action="remove">remove</button><button type="button" class="btn btn-default" data-action="toggle">toggle</button></div><button type="button" class="btn btn-default" data-action="build-rule">build-rule</button>');
                    buildCheckBox(rcp, $('select[multiple]:first').get(0), '', '');
                    $('.ruleCheckBoxPanel>ul').addClass('tree');
                    $('.tree li:has(ul)').addClass('parent_li').find(' > span');
                    $('.tree li.parent_li > span').on('click', function (e) {
                        $(this).parent('li.parent_li').find(' > ul').toggle('fast');
                        e.stopPropagation();
                    });
                    e.stopPropagation();
                    $('.tree input[type="checkbox"]').on('click', function () {
                        if($(this).prop('checked')){
                            $.each($(this).parentsUntil('.tree'), function(i,n){
                                if($(n).is('li.parent_li')){
                                    $(n).children('label').children('input[type="checkbox"]').prop('checked', true);
                                }
                            });
                        }
                    });
                    $('button', $('.ruleCheckBoxPanel > .btn-group')).on('click', function () {
                        var cv = {add:true, remove:false, toggle:function(i, v){return !v;}};
                        $('.tree input[type="checkbox"]').prop('checked', cv[$(this).attr('data-action')]);
                    });
                    $('button[data-action="build-rule"]').on('click', function() {
                        var rule = $('#rule');
                        var ruleArr = $.parseJSON(rule.val());
                        $.each($('.tree input[type="checkbox"]'), function(i, n){
                            var val = parseInt(n.value);
                            if(n.checked && -1 === $.inArray(val, ruleArr)){
                                ruleArr.push(val);
                            } else if(!n.checked && -1 !== $.inArray(val, ruleArr)) {
                                ruleArr.remove(val);
                            }
                        });
                        rule.val('['+ruleArr+']');
                    });
                });
            };

            dumpScripts.s4 = function(){
                $('body').append('<div id="back-to-top"><i class="fa fa-rocket"></i></div>');
                $(window).scroll(function(){
                    if ($(window).scrollTop()>500){
                        $("#back-to-top").fadeIn(1000);
                    } else {
                        $("#back-to-top").fadeOut(1000);
                    }
                });
                $("#back-to-top").click(function(){
                    $('body,html').animate({scrollTop:0},1000);
                    return false;
                });
            };

            dumpScripts.s5 = function(){
                $('aside .panel.panel-default div.panel-heading').click(function(){
                    $('aside .panel.panel-default ul.list-group').not($(this).next('ul')).height(0);
                    $(this).next('ul').height(function(n,c){
                        return c == '0' ? 'auto' : '0';
                    });
                });

            }
            </script>
        @endif
    </head>
    <body class="container">
        <a class="sr-only" href="#content">Skip to main content</a>
        <header class="row">
            @include('layouts.header')
        </header>
        <nav class="navbar navbar-inverse row" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse">
                    @include('layouts.nav')
                </div>
            </div>
        </nav>
        <main class="row">
            <aside>
                @include('layouts.aside')
            </aside>
            <div class="panel panel-default">
                @yield('main')
            </div>
        </main>
        <footer class="row">
            @include('layouts.footer')
        </footer>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </body>
</html>