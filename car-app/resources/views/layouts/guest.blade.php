<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-base-200">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
        <div class="flex justify-center mb-6">
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" class="w-40 rounded-lg shadow-lg" alt="Logo" />
            </a>
        </div>
        <div class="flex justify-center mb-4">
            <ul id="version"
                class="inline-flex text-sm list-none z-10 m-0 p-2 bg-neutral text-neutral-content rounded-lg shadow">
                <li class="mr-4">PHP: {{ phpversion() }}</li>
                <li>Laravel: {{ app()->version() }}</li>
            </ul>
        </div>
        <div class="w-full">
            <div>
                {{ $slot }}
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-error mt-4">
                <div>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        @endif
    </div>
</body>

</html>
