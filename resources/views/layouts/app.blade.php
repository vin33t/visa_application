<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2>Visa</h2>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                   
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="text-center"><h1>Visa office Management</h1></div><br>
            <div class="row" style="margin-top: 25px;">
                @if(auth::check())
                    <div class="col-lg-3">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group">
                                <a href="{{route('home')}}">Dashboard</a>
                            </li>
                            {{-- @if($agents->count()>0) --}}
                                <li class="list-group">
                                    <a href="{{route('leads')}}">Leads</a>
                                </li>
                                <li class="list-group">
                                    <a href="{{route('students')}}">Students</a>
                                </li>
                                {{-- @endif --}}
                            <li class="list-group">
                                <a href="{{route('agents')}}">Agents</a>
                            </li>
                            <li class="list-group">
                                <a href="">Offer Letter Status</a>
                            </li>
                            <li class="list-group">
                                <a href="{{route('files.progress')}}">File progress status</a>
                            </li>
                            <li class="list-group">
                                <a href="#">Accepted Letter</a>
                            </li>
                            <li class="list-group">
                                <a href="{{route('visa.index')}}">Visa status</a>
                            </li>
                        </ul>
                    </div>    
                    </div>
                    <div class="col-lg-8">
                    @else
                    <div class="col-lg-12">
                @endif
                        @yield('content')
                    </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>
</body>
</html>
