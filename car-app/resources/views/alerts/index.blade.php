<!-- filepath: /home/nanorocks/Documents/mycar.nankov.mk/car-app/resources/views/alerts/index.blade.php -->
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
                    <a href="{{ route('alerts.index') }}" class="gap-1">
                        <x-icons.alerts />
                        {{ __('Alerts') }}
                    </a>
                </li>
            </ul>
        </div>

        <!-- Heading and Description -->
        <h2 class="font-semibold text-xl leading-tight pt-4">
            {{ __('Alerts') }}
        </h2>
        <p class="text-sm pb-4">
            {{ __('Manage alerts and notifications. Customize settings to stay updated on events and updates with timely notifications.') }}
        </p>

        <div class="mx-auto">
            <div class="bg-base-200 shadow rounded-xl p-6 mb-6">
                <div class="max-w-xl">
                    <!-- Add your alerts content here -->
                </div>
            </div>
        </div>
    </div>
@endcomponent
