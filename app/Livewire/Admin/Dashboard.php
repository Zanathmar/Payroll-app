<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Payroll;
use App\Models\Salary;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $totalEmployees;
    public $totalDepartments;
    public $totalPayrolls;
    public $totalSalaries;

   public $salariesByMonth = [];
public $months = [];

public function mount()
{
    $this->totalEmployees = Employee::count();
    $this->totalDepartments = Department::count();
    $this->totalPayrolls = Payroll::count();
    $this->totalSalaries = Salary::sum('amount');

    // Ambil 6 bulan terakhir gaji
    $monthlySalaries = Salary::select(
        DB::raw('SUM(amount) as total'),
        DB::raw('MONTH(created_at) as month'),
        DB::raw('YEAR(created_at) as year')
    )
    ->where('created_at', '>=', now()->subMonths(6))
    ->groupBy('year', 'month')
    ->orderBy('year')
    ->orderBy('month')
    ->get();

    // Format data ke dalam array
    foreach ($monthlySalaries as $row) {
        $monthName = Carbon::createFromDate($row->year, $row->month)->translatedFormat('F Y');
        $this->months[] = $monthName;
        $this->salariesByMonth[] = $row->total;
    }
}

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}