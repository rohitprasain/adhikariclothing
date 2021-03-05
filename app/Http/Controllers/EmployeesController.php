<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeesController extends Controller
{

    public function allemployee()
    {
        $employees = Employee::all();

        return view('allemployee' , [
            'employees' => $employees,
        ]);
    }
    
    public function addemployee()
    {

        return view('addemployee');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email' => 'required ',
            'contact' => 'required | integer ',
            'email' => 'required | email',
        ]);

        $employee = new Employee();
        $employee->firstname  = $request->firstname;
        $employee->lastname  = $request->lastname;
        $employee->contact  = $request->contact;
        $employee->address  = $request->address;
        $employee->email  = $request->email;
        $employee->description  = $request->description;

        $employee->save();

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee_id = Employee::findOrFail($id);

        return view('showdetail' , compact('employee_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_employee = Employee::findOrFail($id);
        $del_employee->delete();

        return redirect('/allemployee');
    }
}
