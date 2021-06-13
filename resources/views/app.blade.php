<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cella Casos</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            .add{
                position: absolute;
                right:7%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            
            @yield('content')

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
