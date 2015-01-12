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
        <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css" />
    </head>
    <body class="container">
        <a class="sr-only" href="#content">Skip to main content</a>
        <header class="row">
            @include('layouts.header')
        </header>
        <nav class="row">
            @include('layouts.nav')
        </nav>
        <main class="row">
            <aside>
                @include('layouts.aside')
            </aside>
            @yield('main')
        </main>
        <footer class="row">
            @include('layouts.footer')
        </footer>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </body>
</html>