<!-- filepath: resources/views/drivers/index.blade.php -->
@component('layouts.app')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Driver List</h1>

    <div class="overflow-x-auto bg-base-100 rounded shadow">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Vehicles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->phone }}</td>
                    <td>{{ $driver->vehicles_count ?? 0 }}</td>
                    <td>
                        <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-sm btn-outline">Edit</a>
                        <form method="POST" action="{{ route('drivers.destroy', $driver) }}" class="inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline btn-error">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $drivers->links() }}
    </div>
</div>

@endcomponent
