<x-app-layout>
    <main class="pb-32">
        <livewire:create-edit-base-information :$vehicleId />

        <livewire:base-information-table isEditMode="true" :$vehicleId />
    </main>
</x-app-layout>
