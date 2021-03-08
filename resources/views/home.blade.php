@extends('layouts.dashboard')

@section('content')
<div class="home-container">
    <p class="mag" style="color: red;">{{session('msg')}}</p>

    <div class="home-img">
        <img src="{{url('/images/dress1.png')}}" alt="" style="height: 150px; width: 150px;">
    </div>
    <div class="home-total">

        <h1>Total employee : {{$totalemployee}}</h1>
        <h1>Total messages : {{$totalmessage}}</h1>
        <h1>Total Products : {{$totalproduct}}</h1>
        <h1>Total orders : {{$totalorder}}</h1>

    </div>
</div>
@endsection