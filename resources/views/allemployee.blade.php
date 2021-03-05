@extends('layouts.dashboard')

@section('content')
<div class="all-container">

    <div class="all-heading">
        <div>
            <h2>All Employees</h2>
        </div>

        <div><input type="text" placeholder="search"><i class="fas fa-search"></i></div>

    </div>


    <div class="all-show">
        <table>
            <tr>
                <th>
                    FirstName
                </th>
                <th>
                    LastName
                </th>
                <th>
                    Contact
                </th>
                <th>
                    Email
                </th>
                <th>
                    Description
                </th>
                <th>

                </th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>
                    {{$employee->firstname}}
                </td>
                <td>
                    {{$employee->lastname}}
                </td>
                <td>
                    {{$employee->contact}}
                </td>
                <td>
                    {{$employee->email}}
                </td>
                <td>
                    {{$employee->description}}

                </td>
                <td>
                    <a class="detail" href="/showdetail/{{$employee->id}}">details
                        <i class="far fa-edit"></i>
                    </a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
</div>
@endsection