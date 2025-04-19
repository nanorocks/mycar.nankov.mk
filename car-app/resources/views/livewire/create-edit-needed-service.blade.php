<div class="container pb-4 pt-5 mt-5">
    <div class="card w-full lg:w-1/2 shadow-xl" style="background: #1f2937">
        <div class="card-body">
            <h2 class="card-title pb-4">
                {{ $isEditMode ? 'Edit' : 'Create' }} Needed Service
            </h2>

            <form wire:submit="{{ $isEditMode ? 'update' : 'add(' . $vehicleId . ')' }}">
                @csrf

                <input wire:model="form.vehicle_id" type="hidden"
                    class="form-control @error('form.vehicle_id') is-invalid @enderror" id="date"
                    aria-describedby="date-err" placeholder="Enter date" value="{{ $service?->vehicle_id }}">

                <div class="pb-4">
                    <x-input-label for="date">Date</x-input-label>
                    <x-text-input-white wire:model="form.date" type="date" class="mt-1 block w-full" id="date"
                        aria-describedby="date-err" placeholder="Enter date" value="{{ $service?->date }}" />

                    <x-input-error class="mt-2" :messages="$errors->get('form.date')" />
                </div>

                <div class="pb-4">
                    <x-input-label for="date">Service Type</x-input-label>
                    <x-text-input-white wire:model="form.service_type" type="text" class="mt-1 block w-full"
                        id="service-type" aria-describedby="service-type-err" placeholder="Enter Service Type"
                        value="{{ $service?->service_type }}" />

                    <x-input-error class="mt-2" :messages="$errors->get('form.service_type')" />

                </div>

                <div class="pb-4">
                    <x-input-label for="date">Recommended Interval</x-input-label>
                    <x-text-input-white wire:model="form.recommended_interval" type="text" class="mt-1 block w-full"
                        id="recommended-interval" aria-describedby="recommended-interval-err"
                        placeholder="Enter Recommended Interval" value="{{ $service?->recommended_interval }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.recommended_interval')" />

                </div>

                <div class="pb-4">
                    <x-input-label for="date">Last Dervice Date</x-input-label>
                    <x-text-input-white wire:model="form.last_service_date" type="date" class="mt-1 block w-full"
                        id="last-service-date" aria-describedby="last-service-date-err"
                        placeholder="Enter Last Dervice Date" value="{{ $service?->last_service_date }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.last_service_date')" />

                </div>

                <div class="pb-4">
                    <x-input-label for="date">Next Service Due</x-input-label>
                    <x-text-input-white wire:model="form.next_service_due" type="date" class="mt-1 block w-full"
                        aria-describedby="next-service-due-err" placeholder="Enter Next Service Due"
                        value="{{ $service?->next_service_due }}" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.next_service_due')" />

                </div>

                <div class="card-actions justify-end">
                    <button type="submit" class="btn btn-primary btn-sm mt-4">
                        <div wire:loading.remove>
                            Submit
                        </div>
                        <div wire:loading>
                            Loading ...
                        </div>
                    </button>

                    @if (session('status'))
                        <div class="alert alert-success mt-2">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
