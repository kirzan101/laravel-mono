<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/employee', function () {
//     return view('employee.index');
// });

Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::get('/employee/create', [EmployeeController::class, 'create']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit']);
Route::put('/tasks/update/{id}', [TaskController::class, 'update']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/tasks/delete/{id}', [TaskController::class, 'destroy']);