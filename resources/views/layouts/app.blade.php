<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'TiDB Sample for PHP & Laravel')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <header>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
        </footer>

        <script type="module"  src="{{ asset('js/app.js') }}"></script>

        @stack('scripts')
    </body>
</html>
