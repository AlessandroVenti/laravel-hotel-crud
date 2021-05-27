<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function homeFunction() {
        return view('pages.home');
    }
}
