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