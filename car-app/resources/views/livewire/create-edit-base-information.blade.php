<div class="container pb-4 pt-5 mt-5">
    <div class="card w-full lg:w-1/2 shadow-xl" style="background: #1f2937">
        <div class="card-body">
            <h2 class="card-title pb-4">
                {{ $isEditMode ? 'Edit' : 'Create' }} Base Information
            </h2>

            <form wire:submit="{{ $isEditMode ? 'update' : 'add(' . $vehicleId . ')' }}">
                @csrf
                <div class="pb-4">
                    <x-input-label for="date">Attribute</x-input-label>

                    <x-text-input-white wire:model="form.attribute" type="text" class="mt-1 block w-full"
                        id="attribute" aria-describedby="attribute-err" placeholder="Enter Attribute"
                        :value="old('value', $service?->attribute)" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.attribute')" />
                </div>

                <div>
                    <x-input-label for="date">Value</x-input-label>
                    <x-text-input-white wire:model="form.value" type="text" class="mt-1 block w-full"
                        :value="old('value', $service?->value)" id="value" aria-describedby="value-err" autofocus autocomplete="value"
                        placeholder="Enter Value" />
                    <x-input-error class="mt-2" :messages="$errors->get('form.value')" />
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
