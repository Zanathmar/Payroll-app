<div class="group relative w-full overflow-hidden rounded-xl bg-gradient-to-r from-white via-zinc-50 to-slate-50/50 dark:from-zinc-900 dark:via-zinc-800 dark:to-zinc-900 shadow-md hover:shadow-lg transition-all duration-300 border border-zinc-200/60 dark:border-zinc-700/50 hover:border-zinc-300 dark:hover:border-zinc-600">
    <!-- Subtle background pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(113,113,122,0.1),transparent_50%)]"></div>
    </div>
    
    <!-- Main content -->
    <div class="relative flex items-center gap-3 p-4">
        <!-- Icon container with enhanced styling -->
        <div class="relative flex items-center justify-center size-12 rounded-xl bg-gradient-to-br from-zinc-700 to-zinc-800 dark:from-zinc-100 dark:to-zinc-200 shadow-md group-hover:shadow-zinc-500/25 transition-all duration-300 group-hover:scale-105 shrink-0">
            <!-- Subtle glow effect -->
            <div class="absolute inset-0 rounded-xl bg-gradient-to-br from-zinc-600 to-zinc-800 dark:from-zinc-200 dark:to-zinc-300 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
            <x-app-logo-icon class="relative size-6 fill-white dark:fill-zinc-800 drop-shadow-sm" />
        </div>
        
        <!-- Content section -->
        <div class="flex flex-col  justify-between flex-1 min-w-0 gap-3">
            <div class="min-w-0 flex-1">              
                <div class="flex items-center gap-2 text-sm">
                    <livewire:components.company-name class="font-medium text-zinc-600 dark:text-zinc-300 truncate" />
                </div>
            </div>
            
            <!-- Right side info -->
            <div class="text-left shrink-0">
                <p class="text-xs text-zinc-500 dark:text-zinc-400 font-medium whitespace-nowrap">
                    Est. 1945
                </p>
               
            </div>
        </div>
        
        <!-- Decorative arrow -->
        <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-1 group-hover:translate-x-0 shrink-0">
            <svg class="size-4 text-zinc-400 dark:text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </div>
    
    <!-- Bottom accent line -->
    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-zinc-400 via-zinc-500 to-zinc-400 dark:from-zinc-600 dark:via-zinc-500 dark:to-zinc-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>