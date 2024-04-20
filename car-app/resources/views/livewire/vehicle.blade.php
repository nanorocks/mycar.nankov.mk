<div class="card w-full bg-base-100 shadow-xl mt-6">
    <figure>
        {!! $vehicle->other !!}
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $vehicle->name }}</h2>
        <p>{{ $vehicle->vehicle_register_number }}</p>
        {{-- <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
        </div> --}}
    </div>
</div>
