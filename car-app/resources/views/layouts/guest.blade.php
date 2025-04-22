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
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="flex justify-center">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}

                <img src="{{ asset('img/logo.png') }}" style="width: 320px; border-radius: 30px;" />
            </a>
        </div>
        <div class="flex justify-center">
            <ul id="version"
                style="display:inline-flex; font-size: x-small; list-style-type: none; z-index: 1000; margin: 0; padding: 5px; background-color: #1f2937; color: white; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0,0,0,0.2);">
                <li style="display: inline; margin-right: 10px;">PHP: {{ phpversion() }}</li>
                <li style="display: inline;">Laravel: {{ app()->version() }}</li>
            </ul>
        </div>
        <div class="flex justify-center">
            {{ $slot }}
        </div>
        @if (session('error'))
            <div class="mt-4 px-4 py-2 bg-red-500 text-white rounded">
                {{ session('error') }}
            </div>
        @endif
    </div>
</body>

</html>
