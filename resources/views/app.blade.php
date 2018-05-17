<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

    </head>
    <body>
        <div id="app">
            @include('components.navbar')

            <main class="content">
              <router-view></router-view>
            </main>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
