<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>

        <link type="text/css" rel="stylesheet" href="../css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        @yield('content')
        <footer>
            <p>HDC Events &copy; {{ date('Y') }}</p>
            <p>HDC Events &copy; 2026</p>
        </footer>
    </body>
</html>
