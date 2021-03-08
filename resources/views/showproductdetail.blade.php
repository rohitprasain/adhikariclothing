@extends('layouts.welcome')

@section('content')

<div class="welcomestore-container">

        <div class="order-container">
                <div class="order-left">
                        <div class="orderimg">
                                <img src="{{url('/images/'.$productdetails->category .'/' .$productdetails->imglocation)}}" alt="baby-img" height="250rem" width="300rem">
                        </div>
                        <div class="orderproductname">
                                <p>{{$productdetails->productname}} ({{$productdetails->size}})</p>
                        </div>

                        <div class="orderprice">
                                <p>Price : {{$productdetails->price}}</p>
                        </div>
                </div>


                <div class="order-right">
                        <form action="/storeorder/{{$productdetails->id}}/{{$productdetails->productname}}/{{$productdetails->size}}/{{$productdetails->price}}" method="POST">
                                @csrf

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
                                        <input type="number" required placeholder="contact" name="contact" value="{{ old('contact') }}">
                                        @error('contact')
                                        <p style="text-align: center; color:red;">{{$message}}</p>
                                        @enderror
                                </div>
                                <div class="contact-email">
                                        <input type="number" required placeholder="quantity" name="quantity" value="{{ old('quantity') }}">
                                        @error('quantity')
                                        <p style="text-align: center; color:red;">{{$message}}</p>
                                        @enderror
                                </div>

                                <div class="contact-login-btn">
                                        <button type="submit" class="login-btn">Order</i></button>
                                </div>
                        </form>
                </div>
        </div>

</div>

@endsection