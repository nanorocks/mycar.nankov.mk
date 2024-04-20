<div class="card w-full bg-base-100 shadow-xl pb-2 mt-4">
    <div class="px-4 pt-2 flex justify-between mb-1">
        <div class="btn btn-sm small">Service History</div>
        <a href="{{ route('service.history.manager') }}" class="btn btn-sm btn-primary small">Content
            Manager</a>
    </div>

    <div class="overflow-x-auto">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Service Type</th>
                    <th>Description</th>
                    <th>Cost</th>
                    @if ($isEditMode)
                        <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @if ($services->isEmpty())
                    <tr>
                        <td colspan="5">No data entry...</td>
                    </tr>
                @endif

                @foreach ($services as $item)
                    <tr wire:key="{{ $item->id }}">
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->service_type }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->cost }}</td>
                        @if ($isEditMode)
                            <th>
                                <div class="d-flex">
                                    <button class="mx-1 small text-success btn btn-link btn-sm"
                                        wire:click="edit({{ $item->id }})">Edit</button>
                                    <button button class="mx-1 small text-danger btn btn-link btn-sm"
                                        wire:click="delete({{ $item->id }})"
                                        wire:confirm="Are you sure you want to delete this item?">Delete</button>
                                </div>
                            </th>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
