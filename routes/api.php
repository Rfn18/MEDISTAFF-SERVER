<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\AttendanceSettingController;
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
use App\Http\Controllers\Api\AllowanceController;
use App\Http\Controllers\Api\DeductionController;
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
Route::put('employees/{id}/status', [EmployeeController::class, 'UpdateStatus']);
Route::apiResource('shifts', ShiftController::class);
Route::apiResource('shift-schedules', ShiftScheduleController::class);
Route::get('shift-schedules/{id}/details', [ShiftScheduleController::class, 'showDataByDepartment']);
Route::apiResource('shift-schedule-details', ShiftScheduleDetailController::class);
Route::get('shift-schedule-details/today', [ShiftScheduleDetailController::class, 'getTodaySchedule']);
Route::apiResource('leave-types', LeaveTypeController::class);
Route::apiResource('users', UserManageController::class);
Route::apiResource('allowances', AllowanceController::class);
Route::apiResource('deductions', DeductionController::class);

Route::apiResource('payrolls', PayrollController::class);
Route::post('payroll-by-period', [PayrollController::class, 'showByPeriod']);
Route::post('payroll-generates', [PayrollController::class, 'payroll']);
Route::post('payroll-preview', [PayrollController::class, 'payrollPreview']);
Route::post('payroll-deductions', [PayrollController::class, 'createDeduction']);
Route::post('payroll-allowances', [PayrollController::class, 'createAllowance']);

// Attandance Routes
Route::apiResource('attendance-settings', AttendanceSettingController::class);
Route::get('attendances', [AttendanceController::class, 'index'])->middleware('auth:sanctum');
Route::post('check-in', [AttendanceController::class, 'checkIn'])->middleware('auth:sanctum');
Route::post('check-out', [AttendanceController::class, 'checkOut'])->middleware('auth:sanctum');
Route::post('summarise', [AttendanceController::class, 'summarise'])->middleware('auth:sanctum');
Route::get('dinamic-qr', [AttendanceController::class, 'getDinamicQr']);
Route::post('attendance-by-month', [AttendanceController::class, 'getAttendanceByMonthAndYear'])->middleware('auth:sanctum');
Route::post('late-minutes', [AttendanceController::class, 'getLateMinutesByEmployeeInMonthAndYear']);
Route::get('amount-late', [DeductionController::class, 'getAmountLate']);

// Leave Request Routes
Route::apiResource('leave-requests', LeaveRequestController::class)->middleware('auth:sanctum');
Route::put('leave-requests/{id}/approve', [LeaveRequestController::class, 'approve'])->middleware('auth:sanctum');
Route::put('leave-requests/{id}/reject', [LeaveRequestController::class, 'reject'])->middleware('auth:sanctum');
Route::get('leave-request/by', [LeaveRequestController::class,'getDataByEmployee'])->middleware('auth:sanctum');
