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

<body>
    <div class="home-page">
        <div class="container-fluid">
            <div class="welcome-header_wrap">
                <div class="container welcome-header_inner">
                    <div class="header_content">
                        <img class="header_logo" src="{{ asset('img/Dungeons-and-Dragons-Logo.png') }}" alt="Dungeons and Dragons">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>