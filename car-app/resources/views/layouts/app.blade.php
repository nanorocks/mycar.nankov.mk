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
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=car&iconset=feather -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-car-icon lucide-car">
                            <path
                                d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                            <circle cx="7" cy="17" r="2" />
                            <path d="M9 17h6" />
                            <circle cx="17" cy="17" r="2" />
                        </svg>

                        {{ __('Vehicles') }}
                    </a>
                    <ul>
                        <li><a href="#"><!-- https://feathericons.dev/?search=plus-circle&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add New Vehicle') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=list&iconset=feather -->
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
                                {{ __('Vehicle List') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=search&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" x2="16.65" y1="21" y2="16.65" />
                                </svg>
                                {{ __('Vehicle Search') }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=tool&iconset=feather -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                        </svg>

                        {{ __('Maintenance') }}
                    </a>
                    <ul>
                        <li><a href="#"><!-- https://feathericons.dev/?search=clock&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                {{ __('Scheduled Maintenance') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=file-text&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Service History') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=plus-circle&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add Service Record') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=droplet&iconset=feather -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                        </svg>

                        {{ __('Fuel Tracking') }}
                    </a>
                    <ul>
                        <li><a href="#"><!-- https://feathericons.dev/?search=edit2&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                                </svg>
                                {{ __('Log Fuel Entry') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=file-text&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('View Fuel History') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=bar-chart&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="12" x2="12" y1="20" y2="10" />
                                    <line x1="18" x2="18" y1="20" y2="4" />
                                    <line x1="6" x2="6" y1="20" y2="16" />
                                </svg>
                                {{ __('Fuel Efficiency Report') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=truck&iconset=feather -->
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
                    <ul>
                        <li><a href="#"><!-- https://feathericons.dev/?search=layers&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                                    <polyline points="2 17 12 22 22 17" />
                                    <polyline points="2 12 12 17 22 12" />
                                </svg>
                                {{ __('Fleet Overview') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=user-plus&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <line x1="20" x2="20" y1="8" y2="14" />
                                    <line x1="23" x2="17" y1="11" y2="11" />
                                </svg>
                                {{ __('Assign Drivers') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=pie-chart&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                    <path d="M22 12A10 10 0 0 0 12 2v10z" />
                                </svg>
                                {{ __('Fleet Utilization') }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=bar-chart2&iconset=feather -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="18" x2="18" y1="20" y2="10" />
                            <line x1="12" x2="12" y1="20" y2="4" />
                            <line x1="6" x2="6" y1="20" y2="14" />
                        </svg>

                        {{ __('Reports') }}
                    </a>
                    <ul>
                        <li><a href="#">
                                <!-- https://feathericons.dev/?search=file-text&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Maintenance Reports') }}</a>
                        </li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="20" height="20" class="main-grid-item-icon" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                                {{ __('Fuel Efficiency Reports') }}</a>
                        </li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="20" height="20" class="main-grid-item-icon" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg> {{ __('Utilization Reports') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <!-- https://feathericons.dev/?search=users&iconset=feather -->
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
                    <ul>
                        <li><a href="#"><!-- https://feathericons.dev/?search=list&iconset=feather -->
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
                                {{ __('Driver List') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=plus-circle&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="16" />
                                    <line x1="8" x2="16" y1="12" y2="12" />
                                </svg>
                                {{ __('Add New Driver') }}</a></li>
                        <li><a href="#"><!-- https://feathericons.dev/?search=bar-chart&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                    height="20" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <line x1="12" x2="12" y1="20" y2="10" />
                                    <line x1="18" x2="18" y1="20" y2="4" />
                                    <line x1="6" x2="6" y1="20" y2="16" />
                                </svg>
                                {{ __('Driver Performance') }}</a>
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
</script>

</html>
