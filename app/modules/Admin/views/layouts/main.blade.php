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
                $('aside .panel.panel-default div.panel-heading').on('click', function(){
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
            @include('Admin::layouts.header')
        </header>
        <nav class="navbar navbar-inverse row" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse">
                    @include('Admin::layouts.nav')
                </div>
            </div>
        </nav>
        <main class="row">
            <aside>
                @include('Admin::layouts.aside')
            </aside>
            <div class="panel panel-default">
                @yield('main')
            </div>
        </main>
        <footer class="row">
            @include('Admin::layouts.footer')
        </footer>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </body>
</html>