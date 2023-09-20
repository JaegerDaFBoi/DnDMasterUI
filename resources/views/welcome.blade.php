<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DND Master UI</title>
        <link rel="stylesheet" href="{{ asset('assets/fonts/Vecna/Vecna-oppx.ttf') }}">
        <!-- Styles -->
        <!-- Scripts -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        
    </head>
    <body class="antialiased">
        <div>
            <h1 class="title">Dungeons and Dragons User Interface</h1>
        </div>
    </body>
</html>
