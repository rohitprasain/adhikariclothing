@extends('layouts.dashboard')

@section('content')
<div class="all-container">

    <div class="all-heading">
        <div>
            <h2>All Messages</h2>
        </div>

    </div>


    <div class="all-show">
        @foreach($messages as $message)
        <div class="message-card" style="margin-bottom: 2rem;">
            <h3>From: <span style="color: brown; text-transform:capitalize">{{$message->firstname}} {{$message->lastname}}</span></h3>
            <h3>Contact: <span style="color: brown;">{{$message->email}}</span></h3>
            <h3>Message: </h3>
            <p style="color: red;">{{$message->description}}</p>
            <div class="detail-delete" style="margin-top:.5rem">
                <form action="/deletemessage/{{$message->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button">Delete</button>

                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection