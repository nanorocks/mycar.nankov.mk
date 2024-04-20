<x-app-layout>
    <main>
        <livewire:vehicle />

        <div class="my-4">
            <livewire:base-information-table />
        </div>

        <div class="container">
            <livewire:needed-services-table />
        </div>

        <div class="container">
            <livewire:service-history-table />
        </div>
    </main>

</x-app-layout>
