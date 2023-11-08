<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Service Type</th>
                <th>Recommended Interval</th>
                <th>Last Service Date</th>
                <th>Next Service Due</th>
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
                    <td>{{ $item->recommended_interval }}</td>
                    <td>{{ $item->last_service_date }}</td>
                    <td>{{ $item->next_service_due }}</td>
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
