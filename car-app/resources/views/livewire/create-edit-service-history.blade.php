<div class="container pb-4 pt-5 mt-5">
    <div class="card w-full lg:w-1/2 shadow-xl" style="background: #1f2937">
        <div class="card-body">
            <h2 class="card-title pb-4">
                {{ $isEditMode ? 'Edit' : 'Create' }} Service History
            </h2>
            <form wire:submit="{{ $isEditMode ? 'update' : 'add' }}">
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
                    <x-input-label for="description">Description</x-input-label>
                    <x-text-textarea-white wire:model="form.description" class="mt-1 block w-full" id="description"
                        rows="3"
                        placeholder="Enter description">{{ $service?->description }}</x-text-textarea-white>
                    <x-input-error class="mt-2" :messages="$errors->get('form.description')" />

                </div>

                <div class="pb-4">
                    <x-input-label for="cost">Cost</x-input-label>
                    <x-text-input-white wire:model="form.cost" type="text" class="mt-1 block w-full" id="cost"
                        aria-describedby="cost-err" placeholder="Enter cost" value="{{ $service?->cost }}" />

                    <x-input-error class="mt-2" :messages="$errors->get('form.cost')" />
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
