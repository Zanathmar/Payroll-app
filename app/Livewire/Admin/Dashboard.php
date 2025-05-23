<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Payroll;
use App\Models\Salary;

class Dashboard extends Component
{
    public $totalEmployees;
    public $totalDepartments;
    public $totalPayrolls;
    public $totalSalaries;

    public function mount()
    {
        $this->totalEmployees = Employee::count();
        $this->totalDepartments = Department::count();
        $this->totalPayrolls = Payroll::count();
        $this->totalSalaries = Salary::sum('amount');
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}