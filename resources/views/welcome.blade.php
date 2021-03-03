<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rasmi Clothing</title>
    <link rel="icon" href="{{url('/images/dress.png')}}">

    <link rel="stylesheet" href="{{url('/css/homepage.css')}}" type="text/css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="homepage">

        <div class="container">

            <div class="nav">
                <div class="logo">
                    <p>rasmi.</p>
                </div>

                <div class="openhamburger"><i class="fa fa-bars"></i></div>

                <ul class="mainmenu">
                    <li class="menu"><a href="#">Home</a></li>
                    <li class="menu"><a href="#">About</a></li>
                    <li class="menu"><a href="#">Contact Us</a></li>

                    <div class="cart"><i class="fas fa-cart-plus"></i></div>

                    <span class="mediaicons">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-github"></i>
                    </span>
                    <div class="closehamburger"><i class="fa fa-times"></i></div>
                </ul>

            </div>
            <hr>
            
        </div>
        <div class="footer">
                <p>&copy;2021 rasmiclothing.pvt.ltd. || All rights reserved </p>
            </div>
        <script src="{{url('/js/homepage.js')}}"></script>

</body>

</html>