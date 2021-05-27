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
}
