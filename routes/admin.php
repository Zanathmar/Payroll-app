<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Admin\Attendance;
use App\Livewire\Admin\Attendance\DateDetail;
use App\Livewire\Admin\CompanySetting;
use App\Livewire\Admin\DepartmentsAndPositions;
use App\Livewire\Admin\DepartmentsAndPositions\DepartmentDetail;
use App\Livewire\Admin\DepartmentsAndPositions\PositionDetail;
use App\Livewire\Admin\EmployeeCreationWizard;
use App\Livewire\Admin\EmployeeDetail;
use App\Livewire\Admin\Employees;
use App\Livewire\Admin\LeaveRequests;
use App\Livewire\Admin\ManageUsers;
use App\Livewire\Admin\Payrolls;
use App\Livewire\Admin\SalaryComponents;
use App\Livewire\Admin\TaxSettings;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('dashboard/manage-employees', Employees::class)->name('dashboard.manage-employees');
    Route::get('dashboard/time-attendance', Attendance::class)->name('dashboard.time-attendance');
    Route::get('dashboard/time-attendance/{date}', Attendance::class)->name('dashboard.time-attendance.date-detail');
    Route::get('dashboard/payrolls', Payrolls::class)->name('dashboard.payrolls');
    Route::get('dashboard/leave-requests', LeaveRequests::class)->name('dashboard.leave-requests');
    Route::get('dashboard/manage-users', ManageUsers::class)->name('dashboard.manage-users');
    Route::get('dashboard/tax-settings', TaxSettings::class)->name('dashboard.tax-settings');
    Route::get('dashboard/company-settings', CompanySetting::class)->name('dashboard.company-settings');
    Route::get('dashboard/manage-departments-positions', DepartmentsAndPositions::class)->name('dashboard.departments-positions');
    Route::get('dashboard/manage-departments-positions/department/{id}', DepartmentDetail::class)->name('dashboard.department-detail');
    Route::get('dashboard/manage-departments-positions/department/{id}/position/{id2}', PositionDetail::class)->name('dashboard.position-detail');
    Route::get('dashboard/employee-create-wizard', EmployeeCreationWizard::class)->name('dashboard.employee-create-wizard');
    Route::get('dashboard/employee_detail/{id}', EmployeeDetail::class)->name('dashboard.employee-detail');
    Route::get('dashboard/manage-salary-components', SalaryComponents::class)->name('dashboard.salary-components');
});