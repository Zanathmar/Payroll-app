<div class="payroll-dashboard">
        <div class="min-h-screen bg-white dark:bg-zinc-800 text-slate-900 dark:text-white">
            <!-- Mobile-optimized container with better padding -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8 space-y-6 sm:space-y-8">
                
                <!-- Improved Header with better mobile layout -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 sm:mb-8 space-y-4 sm:space-y-0">
                    <div class="text-center sm:text-left">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold dark:text-zinc-100 text-zinc-900 mb-1 sm:mb-2">
                            Payroll Dashboard
                        </h1>
                        <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Employee management & payroll overview
                        </p>
                    </div>
                    <div class="flex items-center justify-center sm:justify-end space-x-4">
                        <div class="flex items-center space-x-2 px-3 py-2 rounded-full bg-green-50 dark:bg-green-900/20">
                            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-400 rounded-full animate-pulse-glow"></div>
                            <span class="text-green-700 dark:text-green-400 text-xs sm:text-sm font-medium">System Online</span>
                        </div>
                    </div>
                </div>

                <!-- Mobile-optimized Main Metrics Cards -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Total Employees Card -->
                    <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up touch-target" style="--delay: 0.1s">
                        <div class="absolute inset-0 gradient-bg-blue opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex items-center space-x-2 text-white/80">
                                    <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-400 rounded-full animate-pulse"></div>
                                    <span class="text-xs font-medium hidden sm:inline">Active</span>
                                </div>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Total Employees</p>
                                <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold">{{$totalEmployees}}</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-1 sm:space-x-2 text-green-300">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-xs font-medium">{{$totalEmployees}} This Month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 sm:w-24 sm:h-24 bg-white/10 rounded-full animate-pulse"></div>
                    </div>

                    <!-- Total Departments Card -->
                    <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up touch-target" style="--delay: 0.2s">
                        <div class="absolute inset-0 gradient-bg-green opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div class="px-2 sm:px-3 py-1 bg-white/20 rounded-full">
                                    <span class="text-white text-xs font-bold">DEPT</span>
                                </div>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Departments</p>
                                <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold">{{$totalDepartments}}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-white/60 text-xs">Active divisions</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -left-4 w-16 h-16 sm:w-20 sm:h-20 bg-white/10 rounded-full animate-pulse"></div>
                    </div>

                    <!-- Total Payrolls Card -->
                    <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up touch-target" style="--delay: 0.3s">
                        <div class="absolute inset-0 gradient-bg-orange opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                </div>
                                <div class="text-white/80">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Payroll Cycles</p>
                                <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold">{{$totalPayrolls}}</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-20 h-20 sm:w-28 sm:h-28 bg-white/5 rounded-full"></div>
                    </div>

                    <!-- Total Salaries Card -->
                    <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up touch-target" style="--delay: 0.4s">
                        <div class="absolute inset-0 gradient-bg-purple opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex items-center space-x-1 text-white/80">
                                    <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                    <span class="text-xs font-medium">IDR</span>
                                </div>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Total Paid</p>
                                <p class="text-white text-xl sm:text-2xl lg:text-3xl font-bold"> Rp {{ number_format(($totalSalaries ?? 8200000000) / 1000, 1) }}M</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-1 bg-white/20 rounded-full px-2 sm:px-3 py-1">
                                        <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-white/80 text-xs">Processed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-0 right-0 w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-white/10 to-transparent rounded-bl-3xl"></div>
                    </div>
                </div>

                <!-- Mobile-optimized Charts Section -->
                <div class="grid gap-4 sm:gap-6 lg:grid-cols-3">
                    <!-- Salary Overview Chart - Full width on mobile -->
                    <div class="lg:col-span-2 bg-zinc-100 dark:bg-zinc-900 rounded-xl sm:rounded-2xl p-4 sm:p-6 card-hover animate-fade-in-up" style="--delay: 0.5s">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 sm:mb-6 space-y-3 sm:space-y-0">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1">Salary Overview</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">Monthly salary distribution trends</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm sm:text-base">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-xs text-slate-600 dark:text-slate-400">Paid</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <span class="text-xs text-slate-600 dark:text-slate-400">Pending</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-48 sm:h-56 lg:h-64 chart-container">
                            <canvas id="salaryOverviewChart"></canvas>
                        </div>
                    </div>

                    <!-- Department Distribution -->
                    <div class="bg-zinc-100 dark:bg-zinc-900 rounded-xl sm:rounded-2xl p-4 sm:p-6 card-hover animate-fade-in-up" style="--delay: 0.6s">
                        <div class="mb-4 sm:mb-6">
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1">Department Distribution</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">Employee count by department</p>
                        </div>
                        <div class="h-48 sm:h-56 lg:h-64 flex items-center justify-center chart-container">
                            <canvas id="departmentChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Mobile-optimized Additional Metrics -->
                <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Average Salary -->
                    <div class="card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden animate-fade-in-up touch-target" style="--delay: 0.7s">
                        <div class="absolute inset-0 gradient-bg-teal opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <span class="text-white/60 text-xs">AVG</span>
                            </div>
                            <div class="space-y-2">
                                <p class="text-white/70 text-xs sm:text-sm font-medium uppercase">Average Salary</p>
                                <p class="text-white text-xl sm:text-2xl font-bold">Rp 6.5M</p>
                                <div class="text-green-300 text-xs">+5.2% from last month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Approvals -->
                    <div class="card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden animate-fade-in-up touch-target" style="--delay: 0.8s">
                        <div class="absolute inset-0 gradient-bg-indigo opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-white/70 text-xs sm:text-sm font-medium uppercase">Pending Approvals</p>
                                <p class="text-white text-xl sm:text-2xl font-bold">23</p>
                                <div class="text-yellow-300 text-xs">Requires attention</div>
                            </div>
                        </div>
                    </div>

                    <!-- Overtime Hours -->
                    <div class="card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden animate-fade-in-up touch-target" style="--delay: 0.9s">
                        <div class="absolute inset-0 gradient-bg-orange opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <span class="text-white/60 text-xs">HRS</span>
                            </div>
                            <div class="space-y-2">
                                <p class="text-white/70 text-xs sm:text-sm font-medium uppercase">Overtime Hours</p>
                                <p class="text-white text-xl sm:text-2xl font-bold"></p>
                                <div class="text-orange-300 text-xs">This month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Leave Requests -->
                    <div class="card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden animate-fade-in-up touch-target" style="--delay: 1.0s">
                        <div class="absolute inset-0 gradient-bg-purple opacity-80"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-3 sm:mb-4">
                                <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-blue-400 rounded-full animate-pulse"></div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-white/70 text-xs sm:text-sm font-medium uppercase">Leave Requests</p>
                                <p class="text-white text-xl sm:text-2xl font-bold">4</p>
                                <div class="text-blue-300 text-xs">Pending review</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click effects to cards
                document.querySelectorAll('.card-hover').forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.1}s`;
                    
                    card.addEventListener('click', function() {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    });
                });
                
                // Check if Chart.js is available
                if (typeof Chart !== 'undefined') {
                    // Salary Overview Chart
                    const salaryCtx = document.getElementById('salaryOverviewChart');
                    if (salaryCtx) {
                        new Chart(salaryCtx.getContext('2d'), {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                datasets: [{
                                    label: 'Paid Salaries',
                                    data: [650, 700, 680, 720, 750, 800, 780, 820, 850, 830, 870, 900],
                                    borderColor: '#3b82f6',
                                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                    tension: 0.4,
                                    fill: true
                                }, {
                                    label: 'Pending',
                                    data: [50, 45, 60, 40, 35, 30, 45, 25, 20, 30, 15, 10],
                                    borderColor: '#f59e0b',
                                    backgroundColor: 'rgba(245, 158, 11, 0.1)',
                                    tension: 0.4,
                                    fill: true
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: 'rgba(148, 163, 184, 0.1)'
                                        },
                                        ticks: {
                                            color: '#94a3b8'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            color: 'rgba(148, 163, 184, 0.1)'
                                        },
                                        ticks: {
                                            color: '#94a3b8'
                                        }
                                    }
                                }
                            }
                        });
                    }
                    
                    // Department Distribution Chart
                    const deptCtx = document.getElementById('departmentChart');
                    if (deptCtx) {
                        new Chart(deptCtx.getContext('2d'), {
                            type: 'doughnut',
                            data: {
                                labels: ['Engineering', 'Sales', 'Marketing', 'HR', 'Finance', 'Operations'],
                                datasets: [{
                                    data: [35, 25, 15, 10, 8, 7],
                                    backgroundColor: [
                                        '#3b82f6',
                                        '#10b981',
                                        '#f59e0b',
                                        '#ef4444',
                                        '#8b5cf6',
                                        '#06b6d4'
                                    ],
                                    borderWidth: 0
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                        labels: {
                                            color: '#94a3b8',
                                            usePointStyle: true,
                                            padding: 20,
                                            font: {
                                                size: 11
                                            }
                                        }
                                    }
                                },
                                cutout: '60%'
                            }
                        });
                    }
                    
                    // Simple sparkline charts for metric cards
                    const employeeChartCanvas = document.getElementById('employeeChart');
                    if (employeeChartCanvas) {
                        new Chart(employeeChartCanvas.getContext('2d'), {
                            type: 'line',
                            data: {
                                labels: ['', '', '', '', '', '', ''],
                                datasets: [{
                                    data: [1200, 1210, 1235, 1220, 1240, 1245, 1247],
                                    borderColor: 'rgba(255, 255, 255, 0.8)',
                                    backgroundColor: 'rgba(255, 255, 255, 0.1)',
                                    borderWidth: 2,
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 0
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: { display: false }
                                },
                                scales: {
                                    x: { display: false },
                                    y: { display: false }
                                },
                                elements: {
                                    point: { radius: 0 }
                                }
                            }
                        });
                    }
                    
                    const salaryChartCanvas = document.getElementById('salaryChart');
                    if (salaryChartCanvas) {
                        new Chart(salaryChartCanvas.getContext('2d'), {
                            type: 'line',
                            data: {
                                labels: ['', '', '', '', '', '', ''],
                                datasets: [{
                                    data: [7.8, 8.0, 8.1, 8.3, 8.2, 8.4, 8.2],
                                    borderColor: 'rgba(255, 255, 255, 0.8)',
                                    backgroundColor: 'rgba(255, 255, 255, 0.1)',
                                    borderWidth: 2,
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 0
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: { display: false }
                                },
                                scales: {
                                    x: { display: false },
                                    y: { display: false }
                                },
                                elements: {
                                    point: { radius: 0 }
                                }
                            }
                        });
                    }
                } else {
                    console.warn('Chart.js not loaded. Charts will not be displayed.');
                }
                
                // Add dynamic counter animations
                function animateCounter(element, target, duration = 2000) {
                    const start = 0;
                    const increment = target / (duration / 16);
                    let current = start;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        
                        if (element.textContent.includes('Rp')) {
                            if (target >= 1000000000) {
                                element.textContent = `Rp ${(current / 1000000000).toFixed(1)}B`;
                            } else if (target >= 1000000) {
                                element.textContent = `Rp ${(current / 1000000).toFixed(1)}M`;
                            } else {
                                element.textContent = `Rp ${Math.floor(current).toLocaleString()}`;
                            }
                        } else {
                            element.textContent = Math.floor(current).toLocaleString();
                        }
                    }, 16);
                }
                
                // Animate counters on page load
                setTimeout(() => {
                    const counters = document.querySelectorAll('.animate-float');
                    counters.forEach(counter => {
                        const text = counter.textContent;
                        if (text.includes('Rp')) {
                            const value = parseFloat(text.replace(/[^\d.]/g, ''));
                            if (text.includes('B')) {
                                animateCounter(counter, value * 1000000000);
                            } else if (text.includes('M')) {
                                animateCounter(counter, value * 1000000);
                            }
                        } else {
                            const value = parseInt(text.replace(/[^\d]/g, ''));
                            if (!isNaN(value)) {
                                animateCounter(counter, value);
                            }
                        }
                    });
                }, 500);
                
                // Add real-time data simulation
                function updateRealTimeData() {
                    const statusIndicators = document.querySelectorAll('.animate-pulse-glow');
                    statusIndicators.forEach(indicator => {
                        indicator.style.boxShadow = '0 0 20px rgba(34, 197, 94, 0.8)';
                        setTimeout(() => {
                            indicator.style.boxShadow = '0 0 5px rgba(34, 197, 94, 0.5)';
                        }, 1000);
                    });
                }
                
                // Update indicators every 3 seconds
                setInterval(updateRealTimeData, 3000);
                
                // Add tooltip functionality for cards
                const cards = document.querySelectorAll('.metric-card');
                cards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.zIndex = '10';
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        this.style.zIndex = '1';
                    });
                });
                
                // Add keyboard navigation support
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Tab') {
                        const focusableElements = document.querySelectorAll('.card-hover');
                        focusableElements.forEach(el => {
                            el.setAttribute('tabindex', '0');
                        });
                    }
                });
                
                // Add accessibility improvements
                const interactiveElements = document.querySelectorAll('.card-hover');
                interactiveElements.forEach(element => {
                    element.setAttribute('role', 'button');
                    element.setAttribute('aria-label', 'Dashboard metric card');
                    
                    element.addEventListener('keydown', function(e) {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            this.click();
                        }
                    });
                });
                
                // Performance optimization: Intersection Observer for animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fade-in-up');
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);
                
                // Observe elements that should animate on scroll
                document.querySelectorAll('.chart-container, .metric-card').forEach(el => {
                    observer.observe(el);
                });
            });
            
            // Add window resize handler for responsive charts
            window.addEventListener('resize', function() {
                if (typeof Chart !== 'undefined') {
                    Chart.instances.forEach(chart => {
                        chart.resize();
                    });
                }
            });
            
            // Error handling for missing data
            function handleMissingData() {
                const errorElements = document.querySelectorAll('[data-error]');
                errorElements.forEach(element => {
                    element.style.opacity = '0.5';
                    element.setAttribute('title', 'Data temporarily unavailable');
                });
            }
            
            // Add print styles support
            window.addEventListener('beforeprint', function() {
                document.body.classList.add('print-mode');
            });
            
            window.addEventListener('afterprint', function() {
                document.body.classList.remove('print-mode');
            });
            </script>

<style>
    @media print {
        .print-mode {
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }
        
        .animate-pulse,
        .animate-float,
        .animate-fade-in-up {
            animation: none !important;
        }
        
        .card-hover:hover {
            transform: none !important;
            box-shadow: none !important;
        }
    }
    </style>
    </div>