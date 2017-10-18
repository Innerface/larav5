<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/kumamotos_s.ico') }}" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <div class="header-left-logo">
                        <a href=""><img src="{{ URL::asset('images/kumamotos_m.ico') }}" alt=""/></a>
                    </div>
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        &nbsp;&nbsp;&nbsp;&nbsp;{{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('web') }}">WEB</a></li>
                        <li><a href="{{ route('tool') }}">TOOL</a></li>
                        <li><a href="{{ route('concept') }}">CONCEPT</a></li>
                        <li><a href="{{ route('math') }}">MATH</a></li>
                        <li><a href="{{ route('communicate') }}">COMMUNICATE</a></li>
                        <li><a href="{{ route('lab') }}">LAB</a></li>
                        <li><a href="{{ route('discuss') }}">DISCUSS</a></li>
                        <li><a href="{{ route('entertainment') }}">ENTERTAINMENT</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/admin') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('admin-form').submit();">
                                            Admin
                                        </a>

                                        <form id="admin-form" action="{{ url('/admin') }}" method="Get" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('home') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                            Profile
                                        </a>

                                        <form id="profile-form" action="{{ route('home') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('home') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('note-form').submit();">
                                            Note
                                        </a>

                                        <form id="note-form" action="{{ route('home') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('home') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('favorites-form').submit();">
                                            Favorites
                                        </a>

                                        <form id="favorites-form" action="{{ route('home') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('home') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('wish-form').submit();">
                                            Wish
                                        </a>

                                        <form id="wish-form" action="{{ route('home') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
