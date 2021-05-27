<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class employeesController extends Controller
{
    public function homeFunction() {
        $employees = Employee::all();
        return view('pages.home', compact('employees'));
    }


    public function employeeDetailsFunction($id) {
        $employee = Employee::findOrFail($id);
        return view('pages.employeeDetails', compact('employee'));
    }

    public function deleteFunction($id) {
        $employee = Employee::findOrFail($id);
        $employee -> delete();
        return redirect() -> route('home');
    }

    public function editFunction($id) {
        $employee = Employee::findOrFail($id);
        return view('pages.edit', compact('employee'));
    }

    public function updateFunction(Request $request, $id) {
        $validated = $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
            'ral' => 'nullable',
        ]);
        $employee = Employee::findOrFail($id);
        $employee -> update($validated);
        dd($id, $employee);
        return redirect() -> route('employeeDetails', $employee -> id);

    }
}   

