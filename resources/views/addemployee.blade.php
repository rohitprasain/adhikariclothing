@extends('layouts.dashboard')

@section('content')
<div class="content-container">
    <form action="{{route('addemployee')}}" method="POST">

        @csrf

        <div><input type="text" class="" required name="firstname" placeholder="firstname" value="{{old('firstname')}}">
            @error('firstname')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="text" class="" name="lastname" placeholder="lastname" value="{{old('lastname')}}">
            @error('lastname')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="number" class="" name="contact" placeholder="phone number" value="{{old('contact')}}">
            @error('contact')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="text" required class="fadeIn third" name="address" placeholder="address" value="{{old('address')}}">
            @error('address')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <input type="email " required class="" name="email" placeholder="email" value="{{old('email')}}">
            @error('email')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> <textarea required class="" name="description" placeholder="description" value="{{old('description')}}" rows="4" cols="4"></textarea>
            @error('description')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>
        
        <div>
            <button type="submit">Add</button>
        </div>

    </form>
</div>
@endsection