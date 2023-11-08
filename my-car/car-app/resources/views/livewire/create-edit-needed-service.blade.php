<div class="container pb-4 pt-5">
    <h3>{{ $isEditMode ? 'Edit' : 'Create' }} Needed Service</h3>
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
            <label for="date">Recommended Interval</label>
            <input wire:model="form.recommended_interval" type="text"
                class="form-control @error('form.recommended_interval') is-invalid @enderror" id="recommended-interval"
                aria-describedby="recommended-interval-err" placeholder="Enter Recommended Interval"
                value="{{ $service?->recommended_interval }}">
            <small id="recommended-interval-err" class="form-text text-danger small">
                @error('form.recommended_interval')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="date">Last Dervice Date</label>
            <input wire:model="form.last_service_date" type="date"
                class="form-control @error('form.last_service_date') is-invalid @enderror" id="last-service-date"
                aria-describedby="last-service-date-err" placeholder="Enter Last Dervice Date"
                value="{{ $service?->last_service_date }}">
            <small id="last-service-date-err" class="form-text text-danger small">
                @error('form.last_service_date')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="date">Next Service Due</label>
            <input wire:model="form.next_service_due" type="date"
                class="form-control @error('form.next_service_due') is-invalid @enderror" id="next-service-due"
                aria-describedby="next-service-due-err" placeholder="Enter Next Service Due"
                value="{{ $service?->next_service_due }}">
            <small id="next-service-due-err" class="form-text text-danger small">
                @error('form.next_service_due')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <button type="submit" class="btn btn-primary">
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
    </form>
</div>
