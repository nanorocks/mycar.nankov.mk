<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Attribute</th>
                <th scope="col">Value</th>
                @if ($isEditMode)
                    <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @if ($services->isEmpty())
                <tr>
                    <td colspan="3">No data entry...</td>
                </tr>
            @endif

            @foreach ($services as $item)
                <tr wire:key="{{ $item->id }}">
                    <td>{{ $item->attribute }}</td>
                    <td>{{ $item->value }}</td>
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
