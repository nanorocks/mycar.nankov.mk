<x-app-layout>
    <main class="pb-32">
        <livewire:create-edit-needed-service :$vehicleId />

        <livewire:needed-services-table isEditMode="true" :$vehicleId />
    </main>
</x-app-layout>
