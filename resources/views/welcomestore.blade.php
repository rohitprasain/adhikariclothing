@extends('layouts.welcome')

@section('content')
<p class="mag" style="color: red;">{{session('msg')}}</p>

<div class="welcomestore-container">
    <div class="babies">
        <div class="babies-title">
            <p>Babies</p>
        </div>

        <div class="popular-cards">
            @foreach ($babies as $baby)
            <div class="card">
                <div class="card-image">
                    <img src="{{url('/images/baby/'.$baby->imglocation)}}" alt="baby-img" height="200rem" width="200rem">
                </div>

                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:#008cba; font-size:1.5rem">{{$baby->productname}} ({{$baby->size}})</p>
                </div>
                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:black; font-size:1.2rem">Rs. {{$baby->price}}</p>
                </div>
                <div class="contact-login-btn">
                    <a href="{{route('showproductdetail',$baby->id)}}"><button type="submit" class="login-btn">Buy</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="women">
        <div class="babies-title">
            <p>Women</p>
        </div>

        <div class="popular-cards">
            @foreach ($female as $female)
            <div class="card">
                <div class="card-image">
                    <img src="{{url('/images/female/'.$female->imglocation)}}" alt="female-product" height="200rem" width="200rem">
                </div>

                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:#008cba; font-size:1.5rem">{{$female->productname}} ({{$female->size}})</p>
                </div>
                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:black; font-size:1.2rem">Rs. {{$female->price}}</p>
                </div>
                <div class="contact-login-btn">
                    <a href="/showproductdetail/{{$female->id}}"><button type="submit" class="login-btn">Buy</button></a>
                </div>
            </div>
            @endforeach
        </div>


    </div>

    <div class="men">
        <div class="babies-title">
            <p>Men</p>
        </div>

        <div class="popular-cards">
            @foreach ($male as $male)
            <div class="card">
                <div class="card-image">
                    <img src="{{url('/images/male/'.$male->imglocation)}}" alt="male-img" height="200rem" width="200rem">
                </div>

                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:#008cba; font-size:1.5rem">{{$male->productname}} ({{$male->size}})</p>
                </div>
                <div class="card-details" style="margin-top: .5rem;">
                    <p style="color:black; font-size:1.2rem">Rs. {{$male->price}}</p>
                </div>
                <div class="contact-login-btn">
                    <a href="/showproductdetail/{{$male->id}}"><button type="submit" class="login-btn">Buy</button></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection