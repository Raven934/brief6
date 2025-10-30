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
use App\Models\User;

Route::get('/', [EmployeeController::class, 'index'])->name('employees.dashboard');

Route::get('/employees', [EmployeeController::class, 'list'])->name('employees.list');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');


Route::get('/users', function () {
    $users = User::all();
    return view('users', compact('users'));
})->name('users.index');

