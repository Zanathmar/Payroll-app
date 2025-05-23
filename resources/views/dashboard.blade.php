<x-layouts.app :title="__('Dashboard')">
    <div class="grid gap-4 md:grid-cols-4">
        <div class="rounded-xl border p-4 dark:border-neutral-700 bg-white dark:bg-neutral-800">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Employees</p>
            <p class="text-2xl font-bold">{{ $totalEmployees }}</p>
        </div>
        <div class="rounded-xl border p-4 dark:border-neutral-700 bg-white dark:bg-neutral-800">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Departments</p>
            <p class="text-2xl font-bold">{{ $totalDepartments }}</p>
        </div>
        <div class="rounded-xl border p-4 dark:border-neutral-700 bg-white dark:bg-neutral-800">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Payrolls</p>
            <p class="text-2xl font-bold">{{ $totalPayrolls }}</p>
        </div>
        <div class="rounded-xl border p-4 dark:border-neutral-700 bg-white dark:bg-neutral-800">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Salaries Paid</p>
            <p class="text-2xl font-bold">Rp {{ number_format($totalSalaries, 0, ',', '.') }}</p>
        </div>
    </div>
</x-layouts.app>