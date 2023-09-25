<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DND Master UI</title>
    <link rel="stylesheet" href="{{ asset('/assets/fonts/Vecna/Vecna-oppx.ttf') }}">
    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="home-page">
        <header>
            <div class="container-fluid">
                <div class="welcome-header_wrap">
                    <div class="welcome-header_inner">
                        <div class="container welcome-header_content">
                            <img class="welcome-header_logo" src="{{ asset('assets/img/Dungeons-and-Dragons-Logo.png') }}" alt="Dungeons and Dragons">
                            <div class="welcome-header_title">
                                <h1>DnD Master UI</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container-fluid">
                <div class="welcome-content_wrap">
                    <div class="welcome-content_inner">
                        <div class="container welcome-content">
                            <div class="welcome-content-image"></div>
                            <div class="welcome-content_options">
                                <div class="welcome-content_options_inner">
                                    <div class="welcome-content_options_header">
                                        <div class="options_header_content">
                                            <h1>Welcome</h1>
                                        </div>
                                    </div>
                                    <div class="welcome-content_options_list">
                                        <div class="group_options">
                                            <button class="welcome-content_options_list-item">
                                                <a href="{{ url('/character-workshop') }}">
                                                    <div class="options_list-item_content">
                                                        <img src="{{ asset('assets/icons/dungeons-and-dragons-icon.svg') }}" alt="">
                                                        <span class="list-item_label">Character Creation</span>
                                                    </div>
                                                </a>
                                            </button>
                                            <button class="welcome-content_options_list-item">
                                                <a href="">
                                                    <div class="options_list-item_content">
                                                        <img src="{{ asset('assets/icons/hammer-icon.svg') }}" alt="">
                                                        <span class="list-item_label">Workshop</span>
                                                    </div>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>