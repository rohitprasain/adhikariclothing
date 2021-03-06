@extends('layouts.welcome')

@section('content')

<div class="contact-container">

    <div class="message-container">
        <form action="{{route('sendmessage')}}" method="POST">
            @csrf
            <div class="message-description">
                <h1>SEND A MESSAGE</h1>
            </div>
            <div class="contact-name">
                <input type="text" required placeholder="firstname" name="firstname" value="{{ old('firstname') }}">
                @error('firstname')
                <p style="text-align: center; color:red;">{{$message}}</p>
                @enderror
            </div>
            <div class="contact-name">
                <input type="text" required placeholder="lastname" name="lastname" value="{{ old('lastname') }}">
                @error('lastname')
                <p style="text-align: center; color:red;">{{$message}}</p>
                @enderror
            </div>
            <div class="contact-email">
                <input type="email" required placeholder="email" name="email" value="{{ old('email') }}">
                @error('email')
                <p style="text-align: center; color:red;">{{$message}}</p>
                @enderror
            </div>
            <div>
                <textarea required class="" name="description" placeholder="message" value="{{old('description')}}" rows="8" cols="40"></textarea>
                @error('description')
                <p style="text-align: center; color:red;">{{$message}}</p>
                @enderror
            </div>
            <div class="contact-login-btn">
                <button type="submit" class="login-btn">Send <i class="fa fa-sign-in"></i></button>
            </div>
        </form>

    </div>

    <div class="contact-info">
        <div class="info-heading">
            <h1>Contact Info</h1>
        </div>

        <div class="contact-location">
            <h2><span>🏠 Lolang,Kathmandu</span></h2>

        </div>
        <div class="contact-phonenumber">
            <h2><span>📞 +9779849561819</span></h2>
        </div>
        <div class="contact-gmail">
            <h2><span>📧 microscopicrohit@gmail.com</span></h2>
        </div>
    </div>



</div>

@endsection