<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Car App!') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased min-h-screen">

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">

            <div class="container mx-auto pb-8">
                <!-- Page Heading -->
                @if (isset($header))
                    {{ $header }}
                @endif

                <!-- Page Content -->
                <main class="px-6">
                    @include('layouts.navigation')
                    {{ $slot }}
                </main>
            </div>

        </div>
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
                                class="swap-on main-grid-item-icon" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
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
                                class="swap-off main-grid-item-icon" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                            </svg>

                        </label>

                        <button class="btn btn-ghost btn-circle" onclick="toggleAllMenus()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-copy-slash-icon lucide-copy-slash">
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
                        <!-- https://feathericons.dev/?search=home&iconset=feather -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>

                        {{ __('Dashboard') }}
                    </a>
                </li>

                <li class="group">
                    <a href="#" class="flex items-center gap-2"
                        onclick="toggleSubMenu(event, 'vehicles-menu')">
                        <!-- Vehicle Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-car-icon lucide-car">
                            <path
                                d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                            <circle cx="7" cy="17" r="2" />
                            <path d="M9 17h6" />
                            <circle cx="17" cy="17" r="2" />
                        </svg>
                        {{ __('Vehicles') }}
                    </a>
                    <ul id="vehicles-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Add New Vehicle Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add New Vehicle') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Vehicle List Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="8" x2="21" y1="6" y2="6" />
                                    <line x1="8" x2="21" y1="12" y2="12" />
                                    <line x1="8" x2="21" y1="18" y2="18" />
                                    <line x1="3" x2="3.01" y1="6" y2="6" />
                                    <line x1="3" x2="3.01" y1="12" y2="12" />
                                    <line x1="3" x2="3.01" y1="18" y2="18" />
                                </svg>
                                {{ __('Vehicle List') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Vehicle Search Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" x2="16.65" y1="21" y2="16.65" />
                                </svg>
                                {{ __('Vehicle Search') }}
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="group">
                    <a href="#" class="flex items-center gap-2"
                        onclick="toggleSubMenu(event, 'maintenance-menu')">
                        <!-- Maintenance Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                        </svg>
                        {{ __('Maintenance') }}
                    </a>
                    <ul id="maintenance-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Scheduled Maintenance Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                {{ __('Scheduled Maintenance') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Service History Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Service History') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Add Service Record Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add Service Record') }}
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group">
                    <a href="#" class="flex items-center gap-2"
                        onclick="toggleSubMenu(event, 'fleet-management-menu')">
                        <!-- Fleet Management Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <rect height="13" width="15" x="1" y="3" />
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                            <circle cx="5.5" cy="18.5" r="2.5" />
                            <circle cx="18.5" cy="18.5" r="2.5" />
                        </svg>
                        {{ __('Fleet Management') }}
                    </a>
                    <ul id="fleet-management-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Fleet Overview Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                                    <polyline points="2 17 12 22 22 17" />
                                    <polyline points="2 12 12 17 22 12" />
                                </svg>
                                {{ __('Fleet Overview') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Assign Drivers Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <line x1="20" x2="20" y1="8" y2="14" />
                                    <line x1="23" x2="17" y1="11" y2="11" />
                                </svg>
                                {{ __('Assign Drivers') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Fleet Utilization Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                    <path d="M22 12A10 10 0 0 0 12 2v10z" />
                                </svg>
                                {{ __('Fleet Utilization') }}
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group">
                    <a href="#" class="flex items-center gap-2"
                        onclick="toggleSubMenu(event, 'fuel-tracking-menu')">
                        <!-- Fuel Tracking Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                        </svg>
                        {{ __('Fuel Tracking') }}
                    </a>
                    <ul id="fuel-tracking-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Log Fuel Entry Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                                </svg>
                                {{ __('Log Fuel Entry') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- View Fuel History Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('View Fuel History') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Fuel Efficiency Report Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="12" x2="12" y1="20" y2="10" />
                                    <line x1="18" x2="18" y1="20" y2="4" />
                                    <line x1="6" x2="6" y1="20" y2="16" />
                                </svg>
                                {{ __('Fuel Efficiency Report') }}
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="group">
                    <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'reports-menu')">
                        <!-- Reports Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="18" x2="18" y1="20" y2="10" />
                            <line x1="12" x2="12" y1="20" y2="4" />
                            <line x1="6" x2="6" y1="20" y2="14" />
                        </svg>
                        {{ __('Reports') }}
                    </a>
                    <ul id="reports-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Maintenance Reports Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Maintenance Reports') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Fuel Efficiency Reports Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Fuel Efficiency Reports') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Utilization Reports Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Utilization Reports') }}
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="group">
                    <a href="#" class="flex items-center gap-2" onclick="toggleSubMenu(event, 'drivers-menu')">
                        <!-- Drivers Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        {{ __('Drivers') }}
                    </a>
                    <ul id="drivers-menu"
                        class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Driver List Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="8" x2="21" y1="6" y2="6" />
                                    <line x1="8" x2="21" y1="12" y2="12" />
                                    <line x1="8" x2="21" y1="18" y2="18" />
                                    <line x1="3" x2="3.01" y1="6" y2="6" />
                                    <line x1="3" x2="3.01" y1="12" y2="12" />
                                    <line x1="3" x2="3.01" y1="18" y2="18" />
                                </svg>
                                {{ __('Driver List') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Add New Driver Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add New Driver') }}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-2 px-2 py-2">
                                <!-- Driver Performance Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="12" x2="12" y1="20" y2="10" />
                                    <line x1="18" x2="18" y1="20" y2="4" />
                                    <line x1="6" x2="6" y1="20" y2="16" />
                                </svg>
                                {{ __('Driver Performance') }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


</body>
@livewireScripts
<script>
    // Function to toggle the theme
    function toggleTheme() {
        const html = document.querySelector('html');
        const isDark = html.getAttribute('data-theme') === 'dark';
        const newTheme = isDark ? 'light' : 'dark';

        // Update the theme
        html.setAttribute('data-theme', newTheme);

        // Save the theme preference in localStorage
        localStorage.setItem('theme', newTheme);

        // Update the checkbox state
        document.getElementById('theme-toggle').checked = !isDark;
    }

    // Apply the saved theme on page load
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme') || 'light';
        const html = document.querySelector('html');
        html.setAttribute('data-theme', savedTheme);

        // Set the checkbox state based on the saved theme
        document.getElementById('theme-toggle').checked = savedTheme === 'dark';
    });

    function toggleSubMenu(event, menuId) {
        event.preventDefault();
        const allMenus = document.querySelectorAll('#sidebar-menu ul');
        allMenus.forEach(menu => {
            if (menu.id !== menuId) {
                menu.classList.add('hidden');
            }
        });
        const menu = document.getElementById(menuId);
        menu.classList.toggle('hidden');
    }

    let areMenusExpanded = false;

    function toggleAllMenus() {
        const menus = document.querySelectorAll('.menu ul');
        menus.forEach(menu => {
            if (areMenusExpanded) {
                menu.classList.add('hidden');
            } else {
                menu.classList.remove('hidden');
            }
        });
        areMenusExpanded = !areMenusExpanded;
    }
</script>

</html>
