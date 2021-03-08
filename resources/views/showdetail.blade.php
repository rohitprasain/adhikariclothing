@extends('layouts.dashboard')

@section('content')
<div class="detail-container">

    <div class="detail-heading">
        <h2> Employee Details</h2>

    </div>

    <div class="detail-show">
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
            </tr>

            <tr>
                <td>
                    {{$employee_id->firstname}}
                </td>
                <td>
                    {{$employee_id->lastname}}
                </td>
                <td>
                    {{$employee_id->contact}}
                </td>
                <td>
                    {{$employee_id->email}}
                </td>
                <td>
                    {{$employee_id->description}}

                </td>

            </tr>


        </table>
        <div class="buttons">
            <div class="detail-edit">
                <form action="/editdetail/{{$employee_id->id}}" method="POST">
                    @csrf


                    <button type="submit" class="button">Edit</button>

                </form>
            </div>

            <div class="detail-delete">
                <form action="/delete/{{$employee_id->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button">Delete</button>

                </form>
            </div>

        </div>
    </div>

</div>

@endsection