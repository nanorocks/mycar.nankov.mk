<div>
    <!-- Button to open the modal -->
    <button class="btn btn-primary" wire:click="openModal">Create New Vehicle</button>

    <!-- Modal -->
    @if ($isModalOpen)
        <div class="modal modal-open" style="background: #1f2937">
            <div class="modal-box p-0">
                <div class="card w-full shadow-xl" style="background: #1f2937">
                    <div class="card-body">
                        <h3 class="font-bold text-lg mb-4 text-white">Create New Vehicle</h3>

                        @if (session()->has('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="submit">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-white">Vehicle Name</label>
                                <input type="text" id="name" wire:model="name" class="input input-bordered w-full bg-base text-white">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="vehicle_register_number" class="block text-sm font-medium text-white">Register Number</label>
                                <input type="text" id="vehicle_register_number" wire:model="vehicle_register_number" class="input input-bordered w-full bg-base text-white">
                                @error('vehicle_register_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="other" class="block text-sm font-medium text-white">Other Details</label>
                                <textarea id="other" wire:model="other" class="textarea textarea-bordered w-full bg-base text-white"></textarea>
                                @error('other') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="card-actions justify-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn" wire:click="closeModal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-backdrop bg-black opacity-50"></div>
        </div>
    @endif
</div>