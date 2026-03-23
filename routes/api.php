<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\ShiftScheduleController;
use App\Http\Controllers\Api\ShiftScheduleDetailController;
use App\Http\Controllers\Api\LeaveTypeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Api\LeaveRequestController;
use App\Http\Controllers\Api\PayrollController;
use App\Http\Controllers\Api\ShiftController;
use App\Http\Controllers\Api\UserManageController;
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
Route::apiResource('shifts', ShiftController::class);
Route::apiResource('shift-schedules', ShiftScheduleController::class);
Route::apiResource('shift-schedule-details', ShiftScheduleDetailController::class);
Route::apiResource('leave-types', LeaveTypeController::class);
Route::apiResource('users', UserManageController::class);

Route::apiResource('payrolls', PayrollController::class);
Route::post('payroll-generates', [PayrollController::class, 'payroll']);
Route::post('payroll-allowances', [PayrollController::class, 'createAllowance']);
Route::post('payroll-deductions', [PayrollController::class, 'createDeduction']);

// Attandance Routes
Route::post('check-in', [AttendanceController::class, 'checkIn'])->middleware('auth:sanctum');
Route::post('check-out', [AttendanceController::class, 'checkOut'])->middleware('auth:sanctum');
Route::post('summarise', [AttendanceController::class, 'summarise'])->middleware('auth:sanctum');

// Leave Request Routes
Route::apiResource('leave-requests', LeaveRequestController::class);
Route::put('leave-requests/approve/{id}', [LeaveRequestController::class, 'approve'])->middleware('auth:sanctum');
Route::put('leave-requests/reject/{id}', [LeaveRequestController::class, 'reject'])->middleware('auth:sanctum');