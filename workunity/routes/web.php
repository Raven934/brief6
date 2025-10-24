<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

 
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/list', [EmployeeController::class, 'list']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/departments', [DepartmentController::class, 'index']);
