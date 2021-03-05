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

    public function store(Request $request)
    {

        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email' => 'required ',
            'contact' => 'required | integer ',
            'email' => 'required | email',
            'description' => 'required | max:20',
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

    public function show($id)
    {
        $employee_id = Employee::findOrFail($id);

        return view('showdetail' , compact('employee_id'));
    }

    public function edit($id)
    {
        $edit_id = Employee::findOrFail($id);

        return view('editdetail' , compact('edit_id'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'firstname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lastname'  => 'required | regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email' => 'required ',
            'contact' => 'required | integer ',
            'email' => 'required | email',
            'description' => 'required | max:20',
        ]);
        $edit_employee = Employee::find($id);

        $edit_employee->firstname  = $request->firstname;
        $edit_employee->lastname  = $request->lastname;
        $edit_employee->contact  = $request->contact;
        $edit_employee->address  = $request->address;
        $edit_employee->email  = $request->email;
        $edit_employee->description  = $request->description;
        $edit_employee->save();


        // return redirect('/allemployee');
        return redirect()->route('allemployee')->with('msg','Details Updated Successfully');


    }

    public function destroy($id)
    {
        $del_employee = Employee::findOrFail($id);
        $del_employee->delete();

        return redirect('/allemployee')->with('msg','Employee Deleted Successfully');
    }
}
