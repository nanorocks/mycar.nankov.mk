@component('layouts.app')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">{{ __('Driver Performance') }}</h1>
    <!-- Add your driver performance content here -->
    <div class="space-y-4">
        <div class="p-4 border border-gray-300 rounded">
            <h2 class="text-lg font-semibold">{{ __('John Doe') }}</h2>
            <p>{{ __('Completed Trips: 120') }}</p>
            <p>{{ __('Average Rating: 4.8') }}</p>
        </div>
        <div class="p-4 border border-gray-300 rounded">
            <h2 class="text-lg font-semibold">{{ __('Jane Smith') }}</h2>
            <p>{{ __('Completed Trips: 95') }}</p>
            <p>{{ __('Average Rating: 4.6') }}</p>
        </div>
    </div>
</div>
@endcomponent
