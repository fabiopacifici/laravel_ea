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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('images/logo.svg') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Giochi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Altre Esperienze</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Impegni</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Risorse</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        </header>
        @yield('jumbotron')
        
        @yield('content')
        
        <footer>
            <nav class="container d-flex justify-content-between">
                <img class="logo" src="{{asset('images/logo_footer.png')}}" alt="">
               <div class="nav menu">
                 <a class="nav-link" href="#">LIBRERIA DEI GIOCHI</a>
                 <a class="nav-link" href="#">REGISTRATI</a>
                 <a class="nav-link" href="#">ORIGIN</a>
                 <a class="nav-link" href="#">INFORMAZIONI</a>
                 <a class="nav-link" href="#">ACCESSIBILIT??</a>
                 <a class="nav-link" href="#">AIUTO</a>

                
               </div>

               <div class="form-group d-flex mb-0 align-items-center">
                 <select class="form-control" name="languages" id="languages">
                   <option>Italia</option>
                   <option>America</option>
                   <option>Inghilterra</option>
                 </select>
               </div>
            </nav>
        </footer>
    </div>
</body>
</html>
