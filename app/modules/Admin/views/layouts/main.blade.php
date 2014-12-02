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