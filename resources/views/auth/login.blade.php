<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{url('/images/dress.png')}}">

    <title>Rasmi Clothing</title>

    <link rel="stylesheet" href="{{url('/css/loginpage.css')}}" type="text/css">


    <!--Pulling Awesome Font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <div class="main">

        <div class="container">

            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="admin-description">
                    <h2>Rasmi Clothing</h2>
                    <h3>Admin Login</h3>
                </div>
                <hr>
                <div class="email">
                    <input type="email" required placeholder="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p style="text-align: center; color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="password">
                    <input type="password" required placeholder="password" name="password">
                </div>
                <div class="login-btn">
                    <button type="submit" class="login-btn">login <i class="fa fa-sign-in"></i></button>  
                </div>
            </form>

        </div>

    </div>

</body>

</html>