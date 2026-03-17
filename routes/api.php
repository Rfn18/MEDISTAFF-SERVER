<?php

use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\ShiftScheduleController;
use App\Http\Controllers\Api\ShiftScheduleDetailController;
use App\Http\Controllers\Api\LeaveTypeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Api\LeaveRequestController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::post('login', [UserAuthController::class, 'login']);
Route::post('register', [UserAuthController::class, 'register']);
Route::post('logout', [UserAuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('me', [UserAuthController::class, 'me'])->middleware('auth:sanctum');

// Master Data Routes
Route::apiResource('positions', PositionController::class);
Route::apiResource('departments', DepartmentController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('shift-schedules', ShiftScheduleController::class);
Route::apiResource('shift-schedule-details', ShiftScheduleDetailController::class);
Route::apiResource('leave-types', LeaveTypeController::class);

// Leave Request Routes
Route::apiResource('leave-requests', LeaveRequestController::class);
Route::put('leave-requests/approve/{id}', [LeaveRequestController::class, 'approve'])->middleware('auth:sanctum');
Route::put('leave-requests/reject/{id}', [LeaveRequestController::class, 'reject'])->middleware('auth:sanctum');