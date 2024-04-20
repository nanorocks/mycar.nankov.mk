<div class="card w-full shadow-xl pb-2" style="background: #1f2937">
    <div class="px-4 pt-2 flex justify-between mb-1">
        <div class="flex">
            <div class="btn btn-sm small">Base Information</div>
            @if ($isEditMode)
                <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-link small">Go back</a>
                    <button class="btn btn-sm btn-link small" onclick="window.location.reload()">Create new</button>
                </div>
            @endif
        </div>
        <a href="{{ route('base.information.manager') }}" class="btn btn-sm btn-primary small">Content
            Manager</a>

    </div>

    <div class="overflow-x-auto">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col"></th>
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

                @foreach ($services as $key => $item)
                    <tr wire:key="{{ $item->id }}">
                        <td>{{ $key + 1 }}</td>
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
</div>
