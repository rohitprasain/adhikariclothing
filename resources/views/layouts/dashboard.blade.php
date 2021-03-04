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
                    <li class="tasks tasks1"><a href="{{route('allemployee')}}">All Employee</a></li>
                    <li class="tasks"> <a href="{{route('addemployee')}}">Add Employee</a></li>
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