<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeesController::class, 'getEmployees']);
Route::post('/employees', [EmployeesController::class, 'postEmployee']);
