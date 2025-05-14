<div class="drawer-side">

    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>

    <ul class="menu p-4 w-80 min-h-full text-base-content bg-base-200 z-[9999]">

        <div class="items-center justify-center flex flex-col mb-4">
            <img src="{{ asset('img/logo.png') }}" class="w-20 rounded-lg" alt="Logo" />
            <a class="text-xl pointer-events-none">{{ config('app.name', 'Laravel') }}</a>

            <a class="text-sm pointer-events-none">Version: {{ app()->version() }}</a>

            <div class="flex">
                <!-- Search -->
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <label class="swap swap-rotate btn btn-ghost btn-circle">
                    <!-- This hidden checkbox controls the state -->
                    <input type="checkbox" onchange="toggleTheme()" class="hidden" id="theme-toggle" />

                    <!-- https://feathericons.dev/?search=sun&iconset=feather -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                        class="swap-on main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <circle cx="12" cy="12" r="5" />
                        <line x1="12" x2="12" y1="1" y2="3" />
                        <line x1="12" x2="12" y1="21" y2="23" />
                        <line x1="4.22" x2="5.64" y1="4.22" y2="5.64" />
                        <line x1="18.36" x2="19.78" y1="18.36" y2="19.78" />
                        <line x1="1" x2="3" y1="12" y2="12" />
                        <line x1="21" x2="23" y1="12" y2="12" />
                        <line x1="4.22" x2="5.64" y1="19.78" y2="18.36" />
                        <line x1="18.36" x2="19.78" y1="5.64" y2="4.22" />
                    </svg>

                    <!-- https://feathericons.dev/?search=moon&iconset=feather -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                        class="swap-off main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                    </svg>

                </label>

                <button class="btn btn-ghost btn-circle" onclick="toggleAllMenus()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-copy-slash-icon lucide-copy-slash">
                        <line x1="12" x2="18" y1="18" y2="12" />
                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                    </svg>
                </button>
            </div>

        </div>

        <!-- Sidebar content here -->
        <li>
            <a href="{{ route('dashboard') }}">
            <x-icons.home />
            {{ __('Dashboard') }}
            </a>
        </li>

        <li class="group">
            <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'vehicles-menu')">
            <!-- Vehicle Icon -->
            <x-icons.vehicle />
            {{ __('Vehicles') }}
            </a>
            <ul id="vehicles-menu"
            class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
            <li>
                <a href="{{ route('vehicles.create') }}" class="flex items-center gap-2 px-2 py-2">
                <!-- Add New Vehicle Icon -->
                <x-icons.add-vehicle />
                {{ __('Add New Vehicle') }}
                </a>
            </li>
            <li>
                <a href="{{ route('vehicles.index') }}" class="flex items-center gap-2 px-2 py-2">
                <!-- Vehicle List Icon -->
                <x-icons.vehicle-list />
                {{ __('Vehicle List') }}
                </a>
            </li>
            <li>
                <a href="{{ route('vehicles.search') }}" class="flex items-center gap-2 px-2 py-2">
                <!-- Vehicle Search Icon -->
                <x-icons.vehicle-search />
                {{ __('Vehicle Search') }}
                </a>
            </li>
            </ul>
        </li>

        <li class="group">
            <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'maintenance-menu')">
                <x-icons.maintenance />
                {{ __('Maintenance') }}
            </a>
            <ul id="maintenance-menu"
                class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                <li>
                    <a href="{{ route('maintenance.scheduled') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.scheduled-maintenance />
                        {{ __('Scheduled Maintenance') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('maintenance.history') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.service-history />
                        {{ __('Service History') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.add-service-record />
                        {{ __('Add Service Record') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="group">
            <a href="#" class="flex items-center gap-2"
                onclick="toggleSubMenu(event, 'fleet-management-menu')">
                <x-icons.fleet-management />
                {{ __('Fleet Management') }}
            </a>
            <ul id="fleet-management-menu"
                class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                <li>
                    <a href="{{ route('fleet.overview') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.fleet-overview />
                        {{ __('Fleet Overview') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('fleet.assignDrivers') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.assign-drivers />
                        {{ __('Assign Drivers') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('fleet.utilization') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.fleet-utilization />
                        {{ __('Fleet Utilization') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="group">
            <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'fuel-tracking-menu')">
                <x-icons.fuel-tracking />
                {{ __('Fuel Tracking') }}
            </a>
            <ul id="fuel-tracking-menu"
                class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                <li>
                    <a href="{{ route('fuel.log') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.log-fuel-entry />
                        {{ __('Log Fuel Entry') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('fuel.history') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.fuel-history />
                        {{ __('View Fuel History') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('fuel.efficiencyReport') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.fuel-efficiency-reports />
                        {{ __('Fuel Efficiency Report') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="group">
            <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'reports-menu')">
                <x-icons.reports />
                {{ __('Reports') }}
            </a>
            <ul id="reports-menu"
                class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                <li>
                    <a href="{{ route('reports.maintenance') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.fuel-efficiency-reports />
                        {{ __('Maintenance Reports') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('reports.fuelEfficiency') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.utilization-reports />
                        {{ __('Fuel Efficiency Reports') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('reports.utilization') }}" class="flex items-center gap-2 px-2 py-2">
                        <x-icons.utilization-reports />
                        {{ __('Utilization Reports') }}
                    </a>
                </li>
            </ul>
        </li>


        <li class="group">
            <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'drivers-menu')">
                <!-- Drivers Icon -->
                <x-icons.drivers />
                {{ __('Drivers') }}
            </a>
            <ul id="drivers-menu"
                class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                <li>
                    <a href="{{ route('drivers.index') }}" class="flex items-center gap-2 px-2 py-2">
                        <!-- Driver List Icon -->
                        <x-icons.driver-list />
                        {{ __('Driver List') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('drivers.create') }}" class="flex items-center gap-2 px-2 py-2">
                        <!-- Add New Driver Icon -->
                        <x-icons.add-driver />
                        {{ __('Add New Driver') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('drivers.performance') }}" class="flex items-center gap-2 px-2 py-2">
                        <!-- Driver Performance Icon -->
                        <x-icons.driver-performance />
                        {{ __('Driver Performance') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
