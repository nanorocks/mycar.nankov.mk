<div class="card w-full shadow-xl pb-2" style="background: #1f2937">
    <div class="px-4 pt-2 flex justify-between mb-1">
        <div class="flex">
            <div class="btn btn-sm small">Needed services</div>
            @if ($isEditMode)
                <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-link px-3">Go back</a>
                    <button class="btn btn-sm btn-link px-0" onclick="window.location.reload()">Create new</button>
                </div>
            @endif
        </div>
        @if (!$isEditMode)
            <a href="{{ route('needed.service.manager') }}" class="btn btn-sm btn-primary small">Content
                Manager</a>
        @endif
    </div>


    <div class="overflow-x-auto">
        <table class="table text-center">
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
</div>
