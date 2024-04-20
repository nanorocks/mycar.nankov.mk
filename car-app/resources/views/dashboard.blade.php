<x-app-layout>
    <main>
        <div class="grid lg:grid-cols-2 pb-4 gap-4 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 lg:mb-4 md:mb-4">
            <livewire:vehicle />

            <div class="my-4 sm:pt-2 pt-0">
                <livewire:base-information-table />
            </div>
        </div>

        <div class="container pb-4">
            <livewire:needed-services-table />
        </div>

        <div class="container my-4">
            <livewire:service-history-table />
        </div>
    </main>

</x-app-layout>
