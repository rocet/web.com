<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel PHP Framework</title>
        <base href="http://web.com" />
        {{--<base target="_blank" />--}}
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        <nav>
            @include('layouts.nav')
        </nav>
        <aside>
            @include('layouts.aside')
        </aside>
        <main>
            @yield('main')
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>