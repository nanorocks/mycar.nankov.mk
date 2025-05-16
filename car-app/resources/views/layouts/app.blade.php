<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Car App!') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased min-h-screen">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div class="container mx-auto pb-8">
                @if (isset($header))
                    {{ $header }}
                @endif
                <main class="px-6">
                    @include('layouts.navigation')
                    {{ $slot }}
                </main>
            </div>
        </div>
        @include('layouts.sidebar')
    </div>
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
</body>

</html>
