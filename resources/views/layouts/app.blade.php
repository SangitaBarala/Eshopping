<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: chocolate">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                   <h1 style="color: chocolate">Brand HUES!</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color: chocolate; font-size: 18px" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color: chocolate; font-size: 18px" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="main">
            <h1 style="font-family: 'Courier New'; color:chocolate; padding-top: 20px;">Brand HUES</h1>
            <h2 style="font-family: SimSun; color: white; padding: 20px;">"Trusting you in BRAND is all that matters..."</h2>
            <h3 style="font-weight: bold; color: white; padding: 30px;">EXHALE STYLE</h3>
            <p style="color:white;">`because its shop O'clock somewhere`</p>
            <a href="/mainPage">Shop Now</a>
        </div>

        <style>
            .main{
                background-image: url("https://images.squarespace-cdn.com/content/v1/5442b6cce4b0cf00d1a3bef2/1596055300339-E6K7N0S3AFRUDYCS0H74/ke17ZwdGBToddI8pDm48kKbYUC7ko4ep_M3O09c6DLZZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpyUjG47s4lQqa3kGWpoR_DitVobFN0LmU1WvG_uZkJwkPR2-Fb7zwugw-NXPqcoGjo/Vegan-Bags-Pinkstix");
                text-align: center;
                height: 520px;
                margin-top: 40px;
                background-repeat: no-repeat;
                background-size: cover;
                text-align: center;
            }
            .main a{
                font-size: 20px;
                color: blue;
                border-bottom: 1px solid red;
                padding: 4px 12px 4px 12px;
                border-radius: 10px;
                color: red;
            }
            .main a:hover{
                color: blue;
                text-decoration: none;
            }
        </style>

</body>
</html>
