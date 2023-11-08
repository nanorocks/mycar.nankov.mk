<div class="container pb-4 pt-5">
    <h3>{{ $isEditMode ? 'Edit' : 'Create' }} Service History</h3>
    <form wire:submit="{{ $isEditMode ? 'update' : 'add' }}">
        <div class="form-group">
            <input wire:model="form.vehicle_id" type="hidden"
                class="form-control @error('form.vehicle_id') is-invalid @enderror" id="date"
                aria-describedby="date-err" placeholder="Enter date" value="{{ $service?->vehicle_id }}">

            <label for="date">Date</label>
            <input wire:model="form.date" type="date"
                class="form-control @error('form.service_type') is-invalid @enderror" id="date"
                aria-describedby="date-err" placeholder="Enter date" value="{{ $service?->date }}">
            <small id="date-err" class="form-text text-danger small">
                @error('form.date')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="date">Service Type</label>
            <input wire:model="form.service_type" type="text"
                class="form-control @error('form.service_type') is-invalid @enderror" id="service-type"
                aria-describedby="service-type-err" placeholder="Enter Service Type"
                value="{{ $service?->service_type }}">
            <small id="service-type-err" class="form-text text-danger small">
                @error('form.service_type')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea wire:model="form.description" class="form-control @error('form.description') is-invalid @enderror"
                id="description" rows="3" placeholder="Enter description">{{ $service?->description }}</textarea>
            <small id="description-err" class="form-text text-danger small">
                @error('form.description')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="cost">Cost</label>
            <input wire:model="form.cost" type="text" class="form-control @error('form.cost')is-invalid @enderror"
                id="cost" aria-describedby="cost-err" placeholder="Enter cost" value="{{ $service?->cost }}">
            <small id="cost-err" class="form-text text-danger small">
                @error('form.cost')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <button type="submit" class="btn btn-primary">
            <div wire:loading.remove>
                Submit
            </div>
            <div wire:loading>
                Saving ...
            </div>
        </button>

        @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
        @endif
    </form>
</div>
