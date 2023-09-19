<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Vite Vue</title>
        @vite([ 'resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        @if ($users->isNotEmpty())
        @php
            $userArray = [];
            foreach($users as $user) {
                $userArray[] = [
                    'id' => $user->id,
                    'name' => $user->name    
                ];
            }
        @endphp
            <div class="container px-5 mx-auto mt-5">
                <ul class="list-none font-medium text-gray-400 bg-white rounded-lg border border-gray-200">
                    <div id="app">
                        <user :data="{{ json_encode($userArray) }}"></user>
                    </div>
                </ul>
            </div>
        @endif
    </body>
</html>