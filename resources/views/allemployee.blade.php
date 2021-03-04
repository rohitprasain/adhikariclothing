@extends('layouts.dashboard')

@section('content')
<div class="content-container">

    <div class="heading">
        <h2>All Employees</h2>


        @foreach($employees as $employee)

        <div class="show">
           {{$employee->firstname}}
           {{$employee->lastname}}
           <h4>
                <a href="/showdetail/{{$employee->id}}">{{$employee -> contact}}</a> 
             </h4> 
        </div>

        @endforeach
    </div>
</div>
@endsection