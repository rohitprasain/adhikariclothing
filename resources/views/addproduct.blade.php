@extends('layouts.dashboard')

@section('content')
<div class="add-container">
    <form action="{{route('addproduct')}}" method="POST">

        @csrf

        <div><input type="text" class="" required name="productname" placeholder="product name" value="{{old('productname')}}">
            @error('productname')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div class="addproduct-select">
            <label for="category">Category:</label><br>
            <select name="category" id="category" required>
                <option value="baby">Baby</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('category')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div class="addproduct-select">
            <label for="size">Size:</label><br>
            <select name="size" id="size" required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>

            </select>
            @error('size')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="number" required class="" name="price" placeholder="price" value="{{old('price')}}">
            @error('price')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="number" required class="" name="stockquantity" placeholder="quantity" value="{{old('stockquantity')}}">
            @error('stockquantity')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div><input type="text" class="" required name="imglocation" placeholder="img location" value="{{old('imglocation')}}">
            @error('imglocation')
            <p style="text-align: center; color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Add</button>
        </div>

    </form>
</div>
@endsection