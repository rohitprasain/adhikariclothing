@extends('layouts.welcome')

@section('content')

<div class="welcomehome-container">
    <div class="firstsection">
        <div class="overlay">
        </div>
        <div class="mainimage">
            <img src="{{url('/images/mainproduct.png')}}" alt="">
        </div>
    </div>
</div>

<div class="popular-description">
    <p>Popular</p>
</div>

<div class="secondsection">

    <div class="popular-cards">
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/jackets.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">Jackets</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/longsleeves.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">LongSleeves</p>
            </div>
            
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/yogadress.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">YogaDress</p>
            </div>
            
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/babyhoodie.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">Baby Hoodie</p>
            </div>
           
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/panthertop.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">Panther Top</p>
            </div>
           
        </div>

        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/babyboytop.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">BabyBoy Top</p>
            </div>
           
        </div>
        
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/butterflysleeve.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">Butterfly Sleeve</p>
            </div>
           
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{url('/images/popular/trumpetlongsleeve.jpg')}}" alt="" height="200rem" width="200rem">
            </div>

            <div class="card-details" style="margin-top: .5rem;">
                <p style="color:#008cba; font-size:1.5rem">Trumpet Sleeve</p>
            </div>
            
        </div>
       
    </div>
</div>

@endsection