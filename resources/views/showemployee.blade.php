@extends('layouts.dashboard')

@section('content')
<div class="content-container">

    <div class="heading">
        <h2>All Employees</h2>


        @foreach($employees as $employee)

        <div class="show">
           {{$employee->firstname}}
        </div>

        @endforeach
    </div>
</div>
@endsection