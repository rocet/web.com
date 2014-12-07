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
                            parent.children('ul').append('<li><span>'+option.text+pv+option.value+'</span><label class="form-inline"><input type="checkbox" value="'+pv+option.value+'"></label></li>');
                            index ++;
                            if($(select).next().next().is('select[multiple]')){
                                buildCheckBox(parent.children('ul').children().eq(index-1), $(select).next().next(), option.text, pv+option.value);
                            }
                        }
                    });
                };
                var ruleArr = [];
                $('select[multiple]').change(function(e){
                    var rcp = $('.ruleCheckBoxPanel');
                    rcp.html('<div class="btn-group" role="group"><button type="button" class="btn btn-default" data-action="add">add</button><button type="button" class="btn btn-default" data-action="remove">remove</button><button type="button" class="btn btn-default" data-action="toggle">toggle</button></div>');
                    buildCheckBox(rcp, $('select[multiple]:first').get(0), '', '');
                    rcp.append('<button type="button" class="btn btn-default" data-action="build-rule">build-rule</button>');
                    $('.ruleCheckBoxPanel>ul').addClass('tree');
                    $('.tree li:has(ul)').addClass('parent_li').find(' > span');
                    $('.tree li.parent_li > span').on('click', function (e) {
                        $(this).parent('li.parent_li').find(' > ul').toggle('fast');
                        e.stopPropagation();
                    });
                    e.stopPropagation();
                    $('.tree input[type="checkbox"]').on('click', function (e) {
                        if($(this).prop('checked')){
                            $.each($(this).parentsUntil('.tree'), function(i,n){
                                if($(n).is('li.parent_li')){
                                    $(n).children('label').children('input[type="checkbox"]').prop('checked', true);
                                }
                            });
                        }
                    });
                    $('button', $('.ruleCheckBoxPanel > .btn-group')).on('click', function (e) {
                        var cv = {add:true, remove:false, toggle:function(i, v){return !v;}};
                        $('.tree input[type="checkbox"]').prop('checked', cv[$(this).attr('data-action')]);
                    });
                    $('button[data-action="build-rule"]').on('click', function() {
                        $.each($('.tree input[type="checkbox"]'), function(i, n){
                            if(-1 === $.inArray(n.value, ruleArr)){
                                ruleArr.push(n.value);
                            }
                        });
                        console.log(ruleArr)
                    });
                });
            };

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