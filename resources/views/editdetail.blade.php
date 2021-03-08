@extends('layouts.dashboard')

@section('content')
<div class="add-container">

    <div class="detail-heading" style="margin-bottom:1rem;">
        <h2 style="margin-left: 1rem; font-size:1.5rem;"> Change Details</h2>
    </div>

    <form action="/editdetail/{{$edit_id->id}}" method="POST">

        @csrf
        @method('PUT')

        <div><input type="text" class="" required name="firstname" value="{{$edit_id->firstname}}">
            @error('firstname')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="text" required class="" name="lastname" value="{{$edit_id->lastname}}">
            @error('lastname')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="number" required class="" name="contact" value="{{$edit_id->contact}}">
            @error('contact')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="text" required class="" name="address" value="{{$edit_id->address}}">
            @error('address')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="email " required class="" name="email" value="{{$edit_id->email}}">
            @error('email')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <textarea required class="" name="description" rows="8" cols="40">{{$edit_id->description}}</textarea>
            @error('description')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Make Change</button>
        </div>

    </form>

</div>
@endsection