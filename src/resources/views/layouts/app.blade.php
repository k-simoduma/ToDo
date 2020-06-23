<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <div id="header-logo">
                <a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div id="menu">
                <div id="menu-bar">
                    @guest
                    <li class="menu-item">
                        <a href="{{ route('login') }}">{{ __('ログイン')}}</a>
                    </li>
                    <li class="menu-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('登録') }}</a>
                        @endif
                    </li>
                    @else
                    <li class="menu-item">
                        <a href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
