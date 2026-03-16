<?php

use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\EmployeeController;

Route::apiResource('positions', PositionController::class);
Route::apiResource('departments', DepartmentController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('employees', EmployeeController::class);