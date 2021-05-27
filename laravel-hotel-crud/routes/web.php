<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'employeesController@homeFunction')->name('home');

Route::get('/employeeDetails/{id}', 'employeesController@employeeDetailsFunction')->name('employeeDetails');

Route::get('destroy/{id}', 'employeesController@deleteFunction')->name('destroy');

Route::get('/edit/employee/{id}', 'employeesController@editFunction')->name('edit');

Route::post('/update/employee/{id}', 'employeesController@updateFunction')->name('update');
