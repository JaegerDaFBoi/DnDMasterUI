<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DND Master UI</title>
    <link rel="stylesheet" href="{{ asset('/assets/fonts/Vecna/Vecna-oppx.ttf') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icons/fontawesome-free/css/all.min.css') }}">
    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed page-character-creation">
    <div class="wrapper">
        <nav class="main-header character-creation_header navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link header_collapse-button" data-widget="pushmenu" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block home-link">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar character-creation_sidebar elevation-4">

        </aside>
    </div>

    @livewireScripts
</body>

</html>