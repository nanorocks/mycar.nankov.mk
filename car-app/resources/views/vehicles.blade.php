<x-app-layout>
    <main>
        <div class="container">
            <h1 class="text-2xl font-bold text-center pt-8">Vehicle Details</h1>
            <p class="text-center text-gray-600">Preview the details of your vehicle and manage it effectively.</p>
            <div class="mt-4 text-center">
                <livewire:export-vehicle-pdf :$vehicleId />
            </div>

            <div class="grid lg:grid-cols-2 pb-4 gap-4 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 lg:mb-4 md:mb-4">
                <livewire:vehicle-component :$vehicleId />

                <div class="my-4 sm:pt-2 pt-0">
                    <livewire:base-information-table :$vehicleId />
                </div>
            </div>

            <div class="container pb-4">
                <livewire:needed-services-table :$vehicleId />
            </div>

            <div class="container my-4">
                <livewire:service-history-table :$vehicleId />
            </div>
    </main>

</x-app-layout>
