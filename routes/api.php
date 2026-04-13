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
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\RolePermissionController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::post('login', [UserAuthController::class, 'login']);
Route::post('register', [UserAuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [UserAuthController::class, 'logout']);
    Route::get('me', [UserAuthController::class, 'me']);

     // Master Data Routes
     Route::apiResource('positions', PositionController::class);
     Route::apiResource('departments', DepartmentController::class);
     Route::apiResource('roles', RoleController::class);
     Route::apiResource('employees', EmployeeController::class);
     Route::get('employees/department/{id}', [EmployeeController::class, 'getEmployeeByDepartment']);
     Route::get('employee/medical-staff', [EmployeeController::class, 'getEmployeeMedis']);
     Route::get('employee/non-medical-staff', [EmployeeController::class,'getEmployeeNonMedis']);

    //  Shifts
     Route::apiResource('shifts', ShiftController::class);
     Route::apiResource('shift-schedules', ShiftScheduleController::class);
     Route::get('shift-schedules/{id}/details', [ShiftScheduleController::class, 'showDataByDepartment']);
     Route::apiResource('shift-schedule-details', ShiftScheduleDetailController::class);
     Route::get('shift-schedule-details/today', [ShiftScheduleDetailController::class, 'getTodaySchedule']);
     
     Route::apiResource('leave-types', LeaveTypeController::class);
     Route::apiResource('allowances', AllowanceController::class);
     Route::apiResource('deductions', DeductionController::class);

     Route::apiResource('payrolls', PayrollController::class);
     Route::post('payroll-by-period', [PayrollController::class, 'showByPeriod']);
     Route::post('payroll-preview', [PayrollController::class, 'payrollPreview']);
     Route::post('payroll-deductions', [PayrollController::class, 'createDeduction']);
     Route::post('payroll-allowances', [PayrollController::class, 'createAllowance']);

     // Attandance Routes
     Route::apiResource('attendance-settings', AttendanceSettingController::class);
     Route::get('attendances', [AttendanceController::class, 'index']);
     Route::post('check-in', [AttendanceController::class, 'checkIn']);
     Route::post('check-out', [AttendanceController::class, 'checkOut']);
     Route::post('summarise', [AttendanceController::class, 'summarise']);
     Route::get('dinamic-qr', [AttendanceController::class, 'getDinamicQr']);
     Route::post('attendance-by-month', [AttendanceController::class, 'getAttendanceByMonthAndYear']);
     Route::post('late-minutes', [AttendanceController::class, 'getLateMinutesByEmployeeInMonthAndYear']);
     Route::get('amount-late', [DeductionController::class, 'getAmountLate']);

     // Leave Request Routes
     Route::apiResource('leave-requests', LeaveRequestController::class);
     Route::get('leave-request/by', [LeaveRequestController::class,'getDataByEmployee']);
});
// admin
Route::middleware(['auth:sanctum', 'AdminMiddleware'])->group(function () {
    Route::put('employees/{id}/status', [EmployeeController::class, 'UpdateStatus']);
    Route::post('payroll-generates', [PayrollController::class, 'payroll']);
    
    // Role Permission Routes
    Route::apiResource('role-permissions', RolePermissionController::class);
    Route::apiResource('permissions', PermissionController::class);

    // User Management
    Route::apiResource('users', UserManageController::class);

    // Leave Agreement
    Route::put('leave-requests/{id}/approve', [LeaveRequestController::class, 'approve']);
    Route::put('leave-requests/{id}/reject', [LeaveRequestController::class, 'reject']);
});