<div class="container pb-4 pt-5">
    <h3>{{ $isEditMode ? 'Edit' : 'Create' }} Base Information</h3>
    <form wire:submit="{{ $isEditMode ? 'update' : 'add' }}">
        @csrf
        <div class="form-group">
            <label for="date">Attribute</label>
            <input wire:model="form.attribute" type="text"
                class="form-control @error('form.attribute') is-invalid @enderror" id="attribute"
                aria-describedby="attribute-err" placeholder="Enter Attribute" value="{{ $service?->attribute }}">
            <small id="attribute-err" class="form-text text-danger small">
                @error('form.attribute')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <div class="form-group">
            <label for="date">Value</label>
            <input wire:model="form.value" type="text" class="form-control @error('form.value') is-invalid @enderror"
                id="value" aria-describedby="value-err" placeholder="Enter Value" value="{{ $service?->value }}">
            <small id="value-err" class="form-text text-danger small">
                @error('form.value')
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
