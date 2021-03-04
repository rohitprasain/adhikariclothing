<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{url('/images/dress.png')}}">

    <link rel="stylesheet" href="{{url('/css/dashboard.css')}}" type="text/css">



    <title>{{'Rasmi Clothing'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>

<body>

    @auth
    <div class="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
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
        </nav> -->

        <div class="navbar">

            <div class="container">

                <a class="navbar-brand">
                    <h2>{{__('Welcome.')}} </h2>
                </a>

                <div class="dropdown">
                    <button class="dropbtn"> {{ Auth::user()->name[0]}}</button>
                    <i class="fas fa-caret-down"></i>
                    <div class="dropdown-content">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                            {{__('LogOut')}}
                        </a>
                        <!-- form class isnot validated!!!use form id -->
                        <form id='logout-form' action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>

                </div>

            </div>


        </div>


        <div class="dashboard">
            <div class="brand">
                <div class="brand-img">
                    <img src="{{url('images/brandimg.png')}}" alt="brandimage"><br>
                </div>
                <div class="brand-name">
                    <p>rasmi. clothing</p>
                </div>
                <hr style="width: 80%">
            </div>


            <div class="operations">
                <ul>
                    <li class="tasks tasks1"><a href="">All Employee</a></li>
                    <li class="tasks"> <a href="">Add Employee</a></li>
                    <!-- <li class="tasks"><a href="">Edit Employee</a></li> -->
                   
                </ul>
            </div>
        </div>


        <div class="content">@yield('content')</div>

        <div class="footer">
            <p>&copy; 99TechNepal || All rights reserved || 2021 </p>
        </div>

    </div>

    @endauth
</body>
<script src="{{url('/js/dashboard.js')}}"></script>

</html>