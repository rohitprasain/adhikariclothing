@extends('layouts.dashboard')

@section('content')
<div class="all-container">

    <div class="all-heading">
        <div>
            <h2>Order Details</h2>
        </div>

    </div>


    <div class="all-show show-msg">
       
        <div class="message-card msg-card" style="margin-bottom: 2rem;">
            <h3>From: <span style="color: brown; text-transform:capitalize">{{$orderdetail->firstname}} {{$orderdetail->lastname}}</span></h3>
            <h3>Contact: <span style="color: brown;">{{$orderdetail->contact}}</span></h3>
            <h3>Product Name: <span style="color: brown;">{{$orderdetail->productname}}</span></h3>
            <h3>Size: <span style="color: brown;">{{$orderdetail->size}}</span></h3>
            <h3>Quantity: <span style="color: brown;">{{$orderdetail->quantity}}</span></h3>
            <h3>Price: <span style="color: brown;">{{$orderdetail->price}}</span></h3>
            <h3>Total: <span style="color: brown;">{{$orderdetail->quantity * $orderdetail->price}}</span></h3>
            
            <div class="detail-delete" style="margin-top:.5rem">
                <form action="/deleteorder/{{$orderdetail->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button">Delete</button>

                </form>
            </div>
            <div class="detail-delete" style="margin-top:.5rem">
                <form action="/confirmorder/{{$orderdetail->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button">Confirm</button>

                </form>
            </div>
        </div>
        <hr style="margin: 1rem 0rem;">

    </div>

</div>
@endsection

