<div class="card w-full shadow-xl pb-2" style="background: #1f2937">
    <div class="px-4 pt-2 flex justify-between mb-1 mt-2">
        <div class="flex">
            <div class="btn btn-sm small">Needed services</div>
            @if ($isEditMode)
                <div>
                    <a href="{{ route('vehicles.show', ['id' => $vehicleId]) }}" class="btn btn-sm btn-link px-3">Go
                        back</a>
                    <button class="btn btn-sm btn-link px-0" onclick="window.location.reload()">Create new</button>
                </div>
            @endif
        </div>
        @if (!$isEditMode)
            <a href="{{ route('needed.service.manager', ['id' => $vehicleId]) }}"
                class="btn btn-sm btn-primary small">Content
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
                                <div class="d-flex gap-2">
                                    <button class="small text-success" wire:click="edit({{ $item->id }})"> <svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24" class="main-grid-item-icon" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                        </svg></button>
                                    <button button class="small text-error"
                                        wire:click="delete({{ $item->id }})"
                                        wire:confirm="Are you sure you want to delete this item?"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24" class="main-grid-item-icon" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2">
                                            <polyline points="3 6 5 6 21 6" />
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                            <line x1="10" x2="10" y1="11" y2="17" />
                                            <line x1="14" x2="14" y1="11" y2="17" />
                                        </svg></button>
                                </div>
                            </th>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
