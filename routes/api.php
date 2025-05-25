<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(EmployeeController::class)->group( function (){
    Route::get('/employee/department', 'getWithDepartment');
    Route::get('/employee/onlyDepartment/{id}', 'getDepartment');
    Route::patch('/employee/{id}', 'update');
    Route::get('/employee/{id}', 'details');
    Route::get('/employee','get');
    Route::post('/employee', 'store');
    Route::delete('/employee/{id}','delete');
});

Route::controller(DepartmentController::class)->group( function (){
    Route::get('/department/employees/{id}', 'getWithEmployees');
    Route::get('/department/onlyEmployees/{id}', 'getEmployees');
    Route::get('/department','get');
    Route::get('/department/{id}', 'details');
    Route::post('/department', 'store');
    Route::patch('/department/{id}', 'update');
    Route::delete('/department/{id}','delete');
});