@extends('layouts.dashboard')

@section('content')
<div class="home-container">

    <div class="home-img">
        <img src="{{url('/images/dress1.png')}}" alt="" style="height: 150px; width: 150px;">
    </div>
    <div class="home-total">
        <h1>Total employee : {{$total}}</h1>
    </div>
</div>
@endsection