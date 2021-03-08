@extends('layouts.dashboard')

@section('content')
<div class="all-container">

    <div class="all-heading">
        <div>
            <h2>All Orders</h2>
        </div>

    </div>
    <div class="ordercontainer">

        @foreach($all_orders as $order)
        <div class="all-show all-show-order">

            <div class="message-card " style="margin-bottom: .5rem;">
                <h3>Product: <span style="color: brown; text-transform:capitalize">{{$order->productname}}</span></h3>
                <h3>Size: <span style="color: brown;">{{$order->size}}</span></h3><br>

                <h3>From: <span style="color: brown; text-transform:capitalize">{{$order->firstname}} {{$order->lastname}}</span></h3>
                <h3>Contact: <span style="color: brown;">{{$order->contact}}</span></h3><br>

                <h3>Quantity: <span style="color: brown;">{{$order->quantity}}</span></h3>
                <h3>Price: <span style="color: brown;">{{$order->price}}</span></h3><br>

                <h3>Total Price: <span style="color: brown;">{{$order->price * $order->quantity}}</span></h3>

                <div class="detail-delete delorder" style="margin-top:.5rem">

                    <form action="/deleteorder/{{$order->id}}" method="POST">
                        @csrf

                        @method('DELETE')

                        <button type="submit" class="button">Complete</button>

                    </form>
                </div>

            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection