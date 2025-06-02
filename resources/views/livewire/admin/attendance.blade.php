<div class="min-h-screen bg-white dark:bg-zinc-800 text-slate-900 dark:text-white">
    <style>
        /* Glass effect */
        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.1);
        }

        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Hover effects */
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .dark .card-hover:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Metric card backgrounds */
        .metric-card {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.8) 0%, rgba(118, 75, 162, 0.8) 100%);
        }
        .metric-card:nth-child(2) {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.8) 0%, rgba(5, 150, 105, 0.8) 100%);
        }
        .metric-card:nth-child(3) {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.8) 0%, rgba(217, 119, 6, 0.8) 100%);
        }
        .metric-card:nth-child(4) {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.8) 0%, rgba(124, 58, 237, 0.8) 100%);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
            animation-delay: var(--delay, 0s);
            opacity: 0;
        }

        @keyframes pulse-glow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        /* Attendance heatmap */
        .attendance-heatmap {
            min-height: 400px;
        }

        .plotly-graph-div {
            border-radius: 12px;
        }

        .heatmap-instructions {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-left: 4px solid #667eea;
        }

        .dark .heatmap-instructions {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(118, 75, 162, 0.2) 100%);
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .chart-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>

    <!-- Mobile-optimized container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8 space-y-6 sm:space-y-8">
        
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 sm:mb-8 space-y-4 sm:space-y-0">
            <div class="text-center sm:text-left">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold dark:text-zinc-100 text-zinc-900 mb-1 sm:mb-2">
                    Attendance Dashboard
                </h1>
                <p class="text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                    Monitor attendance patterns and trends over the last 30 days
                </p>
            </div>
            <div class="flex items-center justify-center sm:justify-end space-x-4">
                <div class="flex items-center space-x-2 px-3 py-2 rounded-full bg-green-50 dark:bg-green-900/20">
                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-400 rounded-full animate-pulse-glow"></div>
                    <span class="text-green-700 dark:text-green-400 text-xs sm:text-sm font-medium">System Online</span>
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Total Attendance Card -->
            <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up" style="--delay: 0.1s;">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.196-2.196M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.196-2.196M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-2 text-white/80">
                            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-xs font-medium hidden sm:inline">Active</span>
                        </div>
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Total Attendance</p>
                        <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold" id="total-attendance">--</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-1 sm:space-x-2 text-green-300">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs font-medium">↗ Last 30 days</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -right-4 w-16 h-16 sm:w-24 sm:h-24 bg-white/10 rounded-full animate-pulse"></div>
            </div>

            <!-- Average Daily Card -->
            <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up" style="--delay: 0.2s;">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div class="px-2 sm:px-3 py-1 bg-white/20 rounded-full">
                            <span class="text-white text-xs font-bold">AVG</span>
                        </div>
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Daily Average</p>
                        <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold" id="avg-attendance">--</p>
                        <div class="flex items-center justify-between">
                            <span class="text-white/60 text-xs">Per day</span>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-4 -left-4 w-16 h-16 sm:w-20 sm:h-20 bg-white/10 rounded-full animate-pulse"></div>
            </div>

            <!-- Peak Day Card -->
            <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up" style="--delay: 0.3s;">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div class="text-white/80">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Peak Day</p>
                        <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold" id="peak-attendance">--</p>
                        <div class="flex items-center justify-between">
                            <span class="text-orange-300 text-xs" id="peak-date">Highest day</span>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-20 h-20 sm:w-28 sm:h-28 bg-white/5 rounded-full"></div>
            </div>

            <!-- Active Days Card -->
            <div class="metric-card card-hover rounded-xl sm:rounded-2xl p-4 sm:p-6 glass-effect relative overflow-hidden cursor-pointer animate-fade-in-up" style="--delay: 0.4s;">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3 sm:mb-4">
                        <div class="p-2 sm:p-3 rounded-lg sm:rounded-xl bg-white/20 backdrop-blur-sm">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-1 text-white/80">
                            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                            <span class="text-xs font-medium">DAYS</span>
                        </div>
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <p class="text-white/70 text-xs sm:text-sm font-medium tracking-wide uppercase">Active Days</p>
                        <p class="text-white text-2xl sm:text-3xl lg:text-4xl font-bold" id="active-days">--</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-1 bg-white/20 rounded-full px-2 sm:px-3 py-1">
                                <svg class="w-3 h-3 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-white/80 text-xs">Out of 30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 right-0 w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-white/10 to-transparent rounded-bl-3xl"></div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-zinc-100 dark:bg-zinc-900 rounded-xl sm:rounded-2xl p-6 sm:p-8 card-hover animate-fade-in-up" style="--delay: 0.5s;">
            <!-- Chart Header -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6 sm:mb-8 space-y-4 lg:space-y-0">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-white mb-1">
                        Attendance Heatmap
                    </h2>
                    <p class="text-zinc-600 dark:text-zinc-400 mt-2 flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Click on any day to view detailed attendance records
                    </p>
                </div>
                
                <!-- Controls -->
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2 text-sm text-zinc-600 dark:text-zinc-400">
                        <div class="w-3 h-3 bg-green-100 border border-green-300 rounded"></div>
                        <span>Low</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-zinc-600 dark:text-zinc-400">
                        <div class="w-3 h-3 bg-green-300 border border-green-500 rounded"></div>
                        <span>Medium</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-zinc-600 dark:text-zinc-400">
                        <div class="w-3 h-3 bg-green-600 border border-green-800 rounded"></div>
                        <span>High</span>
                    </div>
                </div>
            </div>

            <!-- Instructions Banner -->
            <div class="heatmap-instructions rounded-lg p-4 mb-6">
                <div class="flex items-start space-x-3">
                    <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <div>
                        <p class="text-sm font-medium text-zinc-800 dark:text-zinc-200">
                            Interactive Heatmap
                        </p>
                        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
                            Hover over cells to see attendance count, click to view detailed records for that day. Darker colors indicate higher attendance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Calendar Heatmap -->
            <div id="calendar" class="attendance-heatmap w-full"></div>
        </div>

        <!-- Loading State -->
        <div id="loading-state" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="glass-effect rounded-xl p-8 text-center bg-white dark:bg-zinc-800">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto mb-4"></div>
                <p class="text-zinc-700 dark:text-zinc-300">Loading attendance details...</p>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sample daily data (replace with your Laravel backend data)
        const dailyData = {
            '2024-05-01': 45, '2024-05-02': 52, '2024-05-03': 38, '2024-05-04': 0, '2024-05-05': 0,
            '2024-05-06': 47, '2024-05-07': 51, '2024-05-08': 49, '2024-05-09': 42, '2024-05-10': 48,
            '2024-05-11': 0, '2024-05-12': 0, '2024-05-13': 53, '2024-05-14': 46, '2024-05-15': 44,
            '2024-05-16': 50, '2024-05-17': 41, '2024-05-18': 0, '2024-05-19': 0, '2024-05-20': 55,
            '2024-05-21': 48, '2024-05-22': 43, '2024-05-23': 47, '2024-05-24': 52, '2024-05-25': 0,
            '2024-05-26': 0, '2024-05-27': 49, '2024-05-28': 46, '2024-05-29': 51, '2024-05-30': 45
        };
        
        // Calculate statistics
        const values = Object.values(dailyData);
        const totalAttendance = values.reduce((sum, val) => sum + val, 0);
        const avgAttendance = values.length ? (totalAttendance / values.length).toFixed(1) : 0;
        const peakAttendance = Math.max(...values, 0);
        const peakDate = Object.keys(dailyData).find(date => dailyData[date] === peakAttendance) || 'N/A';
        const activeDays = values.filter(val => val > 0).length;
        
        // Update statistics
        document.getElementById('total-attendance').textContent = totalAttendance;
        document.getElementById('avg-attendance').textContent = avgAttendance;
        document.getElementById('peak-attendance').textContent = peakAttendance;
        document.getElementById('peak-date').textContent = peakDate !== 'N/A' ? new Date(peakDate).toLocaleDateString() : 'N/A';
        document.getElementById('active-days').textContent = activeDays;

        // Utilities for heatmap
        function getISOWeek(d) {
            const date = new Date(d);
            const day = (date.getUTCDay() + 6) % 7;
            date.setUTCDate(date.getUTCDate() - day + 3);
            const firstThursday = new Date(date.getUTCFullYear(), 0, 4);
            const diff = date - firstThursday;
            return 1 + Math.round(diff / (7 * 24 * 3600 * 1000));
        }
        
        function getWeekday(d) {
            return (new Date(d).getUTCDay() + 6) % 7; // 0=Mon ... 6=Sun
        }

        // Prepare heatmap data
        const weeks = {};
        const weeksDatestr = {};
        const text = {};
        
        // Initialize weeks
        for (const dateStr in dailyData) {
            const wk = getISOWeek(dateStr);
            if (!weeks[wk]) weeks[wk] = Array(7).fill(null);
            if (!weeksDatestr[wk]) weeksDatestr[wk] = Array(7).fill(null);
            if (!text[wk]) text[wk] = Array(7).fill(null);
        }
        
        // Populate data
        for (const dateStr in dailyData) {
            const wk = getISOWeek(dateStr);
            const wd = getWeekday(dateStr);
            weeks[wk][wd] = dailyData[dateStr];
            weeksDatestr[wk][wd] = dateStr;
            text[wk][wd] = `<b>${new Date(dateStr).toLocaleDateString()}</b><br>Attendants: <b>${dailyData[dateStr]}</b><br><i>Click to view details</i>`;
        }

        // Prepare plot data
        const z = Object.values(weeks);
        const y = Object.keys(weeks).map(w => `Week ${w}`);
        const x = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

        const data = [{
            z: z,
            x: x,
            y: y,
            type: 'heatmap',
            customdata: Object.values(weeksDatestr),
            colorscale: [
                [0, '#f0f9ff'],
                [0.2, '#e0f2fe'], 
                [0.4, '#bae6fd'],
                [0.6, '#7dd3fc'],
                [0.8, '#38bdf8'],
                [1, '#0284c7']
            ],
            zmin: 0,
            zmax: Math.max(peakAttendance, 5),
            text: Object.values(text),
            hoverinfo: 'text',
            hoverongaps: false,
            showscale: true,
            colorbar: {
                title: 'Attendance Count',
                titlefont: { size: 14 },
                thickness: 15,
                len: 0.7
            }
        }];

        const layout = {
            title: {
                text: '',
                font: { size: 18, color: '#374151' }
            },
            xaxis: {
                title: 'Day of Week',
                titlefont: { size: 14 },
                tickfont: { size: 12 },
                side: 'top'
            },
            yaxis: {
                title: 'Week',
                titlefont: { size: 14 },
                tickfont: { size: 12 },
                autorange: 'reversed'
            },
            margin: { l: 80, r: 80, t: 50, b: 50 },
            plot_bgcolor: 'transparent',
            paper_bgcolor: 'transparent',
            font: {
                family: 'ui-sans-serif, system-ui',
                color: '#374151'
            }
        };

        const config = {
            responsive: true,
            displayModeBar: true,
            modeBarButtonsToRemove: ['pan2d', 'lasso2d', 'select2d', 'autoScale2d'],
            displaylogo: false,
            toImageButtonOptions: {
                format: 'png',
                filename: 'attendance-heatmap',
                height: 500,
                width: 800,
                scale: 1
            }
        };

        Plotly.newPlot('calendar', data, layout, config);

        // Handle clicks
        document.getElementById('calendar').on('plotly_click', function(eventData) {
            if (eventData.points && eventData.points.length > 0) {
                const pt = eventData.points[0];
                const clickedDate = pt.customdata;
                
                if (clickedDate) {
                    // Show loading state
                    document.getElementById('loading-state').classList.remove('hidden');
                    
                    // Simulate loading delay
                    setTimeout(() => {
                        alert(`Navigate to attendance details for: ${clickedDate}`);
                        document.getElementById('loading-state').classList.add('hidden');
                    }, 500);
                }
            }
        });

        // Handle responsive resizing
        window.addEventListener('resize', function() {
            Plotly.Plots.resize('calendar');
        });
    });
    </script>
</div>