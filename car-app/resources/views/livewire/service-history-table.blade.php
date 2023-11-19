<div class="table-responsive">
    <table class="table table-striped">
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
                                <button class="mx-1 small text-success btn btn-link btn-sm"   wire:click="edit({{ $item->id }})">Edit</button>
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
