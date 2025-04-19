<div class="card w-full shadow-xl pb-2" style="background: #1f2937">
    <div class="px-4 pt-2 flex justify-between mb-1 mt-2">
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
            <a href="{{ route('needed.service.manager', ['id' => $vehicleId]) }}" class="btn btn-sm btn-primary small">Content
                Manager</a>
        @endif
    </div>


    <div class="overflow-x-auto">
        <table class="table text-center">
            <thead>
                <tr>
                    @if ($isEditMode)
                        <th scope="col">Order</th>
                    @endif
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
            <tbody wire:sortable="updateItemOrder">
                @if ($services->isEmpty())
                    <tr>
                        <td colspan="6">No data entry...</td>
                    </tr>
                @endif

                @foreach ($services as $item)
                    <tr wire:sortable.item="{{ $item->id }}" wire:key="n-service-{{ $item->id }}">
                        @if ($isEditMode)
                            <td wire:sortable.handle>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-move cursor-pointer mx-auto justify-center text-success">
                                    <polyline points="5 9 2 12 5 15"></polyline>
                                    <polyline points="9 5 12 2 15 5"></polyline>
                                    <polyline points="15 19 12 22 9 19"></polyline>
                                    <polyline points="19 9 22 12 19 15"></polyline>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <line x1="12" y1="2" x2="12" y2="22"></line>
                                </svg>
                            </td>
                        @endif
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
                                    <button button class="mx-1 small text-error btn btn-link btn-sm"
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
