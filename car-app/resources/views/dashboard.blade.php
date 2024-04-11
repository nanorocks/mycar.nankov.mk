<x-app-layout>
    <main>
        <livewire:vehicle />

        <div class="container">
            <hr />
            <h4>Base Information <a href="{{ route('base.information.manager') }}"
                    class="btn btn-sm btn-link small">Content
                    Manager</a></h4>
            <livewire:base-information-table />
        </div>

        <div class="container">
            <hr />
            <h4>Needed Service <a href="{{ route('needed.service.manager') }}" class="btn btn-sm btn-link small">Content
                    Manager</a></h4>
            <livewire:needed-services-table />
        </div>


        <div class="container">
            <hr />
            <h4>Service History <a href="{{ route('service.history.manager') }}" class="btn btn-sm btn-link small">Content
                    Manager</a></h4>
            <livewire:service-history-table />
        </div>
    </main>

</x-app-layout>
