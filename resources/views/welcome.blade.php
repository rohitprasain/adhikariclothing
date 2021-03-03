<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rasmi Clothing</title>
    <link rel="icon" href="{{url('/images/dress.png')}}">

    <link rel="stylesheet" href="{{url('/css/homepage.css')}}" type="text/css" >


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="homepage">
        <div class="navbar">
                helo

                @if (Route::has('login'))
        <div class="">
            @auth
            <a href="{{ url('/home') }}" class="">Home</a>
            @else
            <a href="{{ route('login') }}" class="">Log in</a>
            @endauth
        </div>
        @endif
        </div>


     


    </div>
   
</body>

</html>