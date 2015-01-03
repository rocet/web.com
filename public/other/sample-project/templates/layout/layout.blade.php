<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Framework</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </head>
    <body class="container">
        <a class="sr-only" href="#content">Skip to main content</a>
        <header class="row">
            @include('layout.head')
        </header>
        <main class="row">
            @yield('main')
        </main>
        <footer class="row">
            @include('layout.foot')
        </footer>
    </body>
</html>