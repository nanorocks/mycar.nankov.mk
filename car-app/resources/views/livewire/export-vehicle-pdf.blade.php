<!-- filepath: /Users/andrejnankov/Documents/github/mycar/car-app/resources/views/livewire/export-vehicle-pdf.blade.php -->
<div>
    <!-- Export Button -->
    <button class="btn btn-primary" onclick="export_modal.showModal()">
        Export PDF
    </button>

    <!-- Modal -->
    <dialog id="export_modal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Select Columns to Export</h3>
            <form wire:submit.prevent="export" class="space-y-4">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                    @foreach ($availableColumns as $key => $label)
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" wire:model="selectedColumns.{{ $key }}" class="checkbox">
                            <span>{{ $label }}</span>
                        </label>
                    @endforeach
                </div>

                @if (session()->has('error'))
                    <div class="text-red-600">{{ session('error') }}</div>
                @endif

                <div class="modal-action">
                    <button type="button" class="btn btn-secondary" onclick="export_modal.close()">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Download PDF
                    </button>
                </div>
            </form>
        </div>
    </dialog>
</div>
