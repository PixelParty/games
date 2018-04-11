<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo">
                        <div class="pull-left">
                            <img src="{{ asset('images/logo.svg') }}"/>
                        </div>
                        <div class="pull-right">
                            <div class="top"><span>CRYPTO</span>GAMES</div>
                            <div class="bottom">By Cointelegraph</div>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <div id="submit-game-button">SUBMIT GAME</div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="navbar footer">
            <div class="container row flexbox">
                <div class="col-sm-4 item item-1">
                    <div class="pull-left right">Let us know about your game</div>
                    <div class="orange-btn pull-right">SUBMIT GAME</div>
                </div>
                <div class="col-sm-4 item item-2">
                    <div class="social">
                        <a href="#"><img src="{{ asset('images/facebook.svg') }}"/></a>
                        <a href="#"><img src="{{ asset('images/youtube.svg') }}"/></a>
                        <a href="#"><img src="{{ asset('images/twitter.svg') }}"/></a>
                        <a href="#"><img src="{{ asset('images/telegram.svg') }}"/></a>
                        <a href="#"><img src="{{ asset('images/rss.svg') }}"/></a>

                    </div>
                </div>
                <div class="col-sm-4 item item-3">
                    <div class="copy">Terms of services and Privacy policy<br/>© Cointelegraph 2013- 2018</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
