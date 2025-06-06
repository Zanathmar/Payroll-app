<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Platform')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                    <flux:navlist.item icon="calendar-date-range" :href="route('dashboard.time-attendance')" :current="request()->routeIs('dashboard.time-attendance')" wire:navigate>
                        {{ __('Attendance') }}</flux:navlist.item>
                   <flux:navlist.item 
    icon="inbox-arrow-down" 
    :href="route('employee.new-leave-request')" 
    :current="request()->routeIs('employee.new-leave-request')" 
    wire:navigate>
    {{ __('Leave Request Form') }}
</flux:navlist.item>
                    </flux:navlist.group>
                    
                    
                    @if (Auth::user()->is_admin == true)
                    <flux:navlist.item icon="inbox-arrow-down" :href="route('dashboard.leave-requests')" :current="request()->routeIs('dashboard.leave-requests')" wire:navigate>
                        {{ __('Leave Requests') }}</flux:navlist.item>
    <flux:navlist.group :heading="__('Configuration')" class="grid">
        <flux:navlist.item icon="building-office" :href="route('dashboard.company-settings')" :current="request()->routeIs('dashboard.company-settings')" wire:navigate>
            {{ __('Company Settings') }}
        </flux:navlist.item>

        <flux:navlist.item icon="user-group" :href="route('dashboard.manage-employees')" :current="request()->routeIs(['dashboard.manage-employees','dashboard.employee-create-wizard'])" wire:navigate>
            {{ __('Employees') }}
        </flux:navlist.item>

        <flux:navlist.item icon="circle-stack" :href="route('dashboard.payrolls')" :current="request()->routeIs('dashboard.payrolls')" wire:navigate>
            {{ __('Payrolls') }}
        </flux:navlist.item>

        <flux:navlist.item icon="building-office-2" :href="route('dashboard.departments-positions')" :current="request()->routeIs('dashboard.departments-and-positions')" wire:navigate>
            {{ __('Departments & Position') }}
        </flux:navlist.item>

        <flux:navlist.item icon="user" :href="route('dashboard.manage-users')" :current="request()->routeIs('dashboard.manage-users')" wire:navigate>
            {{ __('Users') }}
        </flux:navlist.item>

        <flux:navlist.item icon="chart-pie" :href="route('dashboard.tax-settings')" :current="request()->routeIs('none')" wire:navigate>
            {{ __('Tax Settings') }}
        </flux:navlist.item>

        <flux:navlist.item icon="banknotes" :href="route('dashboard.salary-components')" :current="request()->routeIs('dashboard.salary-components')" wire:navigate>
            {{ __('Salary Components') }}
        </flux:navlist.item>
    </flux:navlist.group>
@endif
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                    Repository
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
                    Documentation
                </flux:navlist.item>
            </flux:navlist>

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
