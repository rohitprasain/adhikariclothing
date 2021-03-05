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
                <th>

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
                <td>
                    <form action="/delete/{{$employee_id->id}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="button button1">Delete</button>

                    </form>


                </td>
            </tr>


        </table>

    </div>


</div>
</div>
@endsection