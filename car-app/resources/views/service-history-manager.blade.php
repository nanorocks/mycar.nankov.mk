<x-app-layout>
    <main class="pb-32">
        <livewire:create-edit-service-history :$vehicleId />

        <livewire:service-history-table isEditMode="true" :$vehicleId />
    </main>
</x-app-layout>
