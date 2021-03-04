@extends('layouts.dashboard')

@section('content')
<div class="content-container">

    <div class="heading">
        <h2> Employees Details</h2>


        
        <div class="show">
           {{$employee_id->firstname}}
           {{$employee_id->lastname}}
           {{$employee_id->contact}}
           {{$employee_id->email}}
           {{$employee_id->address}}
           {{$employee_id->deacription}}
           
        </div>

      
    </div>
</div>
@endsection