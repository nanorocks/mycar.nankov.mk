<!-- filepath: resources/views/drivers/index.blade.php -->
@component('layouts.app')
<div class="p-6 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6">Add New Driver</h1>

    <form method="POST" action="{{ route('drivers.store') }}" class="space-y-4 bg-base-100 p-6 rounded shadow">
        @csrf

        <div>
            <label class="label">Name</label>
            <input type="text" name="name" class="input input-bordered w-full" required>
        </div>

        <div>
            <label class="label">Phone</label>
            <input type="text" name="phone" class="input input-bordered w-full" required>
        </div>

        <div class="flex justify-end">
            <button class="btn btn-primary">Save Driver</button>
        </div>
    </form>
</div>
@endcomponent
