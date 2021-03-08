@extends('layouts.dashboard')

@section('content')
<div class="all-container">

    <div class="all-heading">
        <div>
            <h2>All Orders</h2>
        </div>
    </div>

    <p class="mag" style="color: red;">{{session('msg')}}</p>

    <div class="all-show">
        <table>
            <tr>
                <th>
                    From
                </th>
                <th>
                    Product Name
                </th>
                <th>

                </th>
            </tr>
            @foreach($all_orders as $order)
            <tr>
                <td>
                    {{$order->firstname}} {{$order->lastname}}
                </td>
                <td>
                    {{$order->productname}}
                </td>
               
                <td>
                    <a class="detail" href="/orderdetails/{{$order->id}}">details
                        <i class="far fa-edit"></i>
                    </a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection