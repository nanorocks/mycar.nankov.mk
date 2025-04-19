<div>
    <div class="container my-4">
        <h2 class="text-xl font-bold">Select a Vehicle</h2>
        <p class="text-gray-600">Choose a vehicle to view its details and services.</p>
        <div class="mb-4 pt-6">
            <input 
            type="text" 
            class="input input-bordered w-full sm:w-3/4 md:w-1/2 lg:w-1/3" 
            placeholder="Search vehicles by name or register number..." 
            wire:model.live.debounce.150ms="search"
        />
        </div>
    </div>
    <!-- Search Input -->
  

    <!-- Vehicles Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:mb-4 md:mb-4 pt-6">
        @forelse ($vehicles as $vehicle)
            <div class="card shadow-xl" style="background: #1f2937">
                <figure class="w-full h-[300px] overflow-hidden mt-6">
                    {!! $vehicle->other !!}
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $vehicle->name }}</h2>
                    <p>{{ $vehicle->vehicle_register_number }}</p>
                    <div class="card-actions justify-end">
                    <a href="{{ route('vehicles.show', ['id' => $vehicle->id]) }}" class="btn btn-primary w-full">Select</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning col-span-full">
            <div>
                <span>No vehicles available.</span>
            </div>
            </div>
        @endforelse
    </div>
    
    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $vehicles->links('vendor.pagination.custom') }}

        {{-- {{ $vehicles->links() }} --}}
    </div>
</div>