<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vite Vue</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app"></div>
        </div>
        <p class="text-danger">赤色のテキスト</p>
    </nav>
    </body>
</html>