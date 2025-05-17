<!-- filepath: /home/nanorocks/Documents/mycar.nankov.mk/car-app/resources/views/preferences/index.blade.php -->
@component('layouts.app')
    <div class="pb-12 pt-6 py-4 sm:py-6 lg:py-8 mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs text-sm">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="gap-1">
                        <x-icons.home />
                        {{ __('Dashboard') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('preferences.index') }}" class="gap-1">
                        <x-icons.preferences />
                        {{ __('Preferences') }}
                    </a>
                </li>
            </ul>
        </div>

        <!-- Heading and Description -->
        <h2 class="font-semibold text-xl leading-tight pt-4">
            {{ __('Preferences') }}
        </h2>
        <p class="text-sm pb-4">
            {{ __('Customize your experience by adjusting settings to suit your needs and ensure the application works the way you prefer.') }}
        </p>

        <div class="mx-auto">
            <div class="bg-base-200 shadow rounded-xl p-6 mb-6">
                <div class="max-w-xl">
                    <!-- Add your preferences content here -->
                </div>
            </div>
        </div>
    </div>
@endcomponent
