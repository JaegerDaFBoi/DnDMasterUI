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
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
            </ul>
            <div class="container justify-content-center">
                <div class="character-creation_header_title">
                    <h1>Character Creation</h1>
                </div>
            </div>
        </nav>
        <aside class="main-sidebar character-creation_sidebar elevation-4">
            <a href="" class="brand-link">
                <img src="{{ asset('assets/img/Dungeons-and-Dragons-Logo.png') }}" alt="Dungeons Logo" class="brand-image img-circle elevation-3 sidebar-dungeons_logo">
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column character-creation_options-list" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item character-creation_option">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>
                                    Lista de Razas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item character-creation_option">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-hat-wizard"></i>
                                <p>
                                    Lista de Clases
                                </p>
                            </a>
                        </li>
                        <li class="nav-item character-creation_option">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-scroll"></i>
                                <p>
                                    Lista de personajes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item character-creation_option">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-dungeon"></i>
                                <p>
                                    Armas y armaduras
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>

    @livewireScripts
</body>

</html>