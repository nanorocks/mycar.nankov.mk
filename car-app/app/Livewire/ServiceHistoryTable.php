<?php

namespace App\Livewire;

use App\Models\Vehicle;
use App\Models\VehicleServiceHistory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class ServiceHistoryTable extends Component
{
    public bool $isEditMode = false;

    public VehicleServiceHistory $item;

    public $vehicleId;

    public string | null $sortOrder = null; // Tracks sorting order (asc/desc)
    public string $sortField = 'date'; // Tracks the field to sort by (default: date)

    public function mount($vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }

    public function new()
    {
        $this->dispatch('new.service.history');
    }

    public function edit(int $id)
    {
        $this->dispatch('edit.service.history', $id);
    }

    public function delete($id)
    {
        VehicleServiceHistory::find($id)->delete();

        $this->dispatch('update.service.history');
    }

    public function updateItemOrder(array $items)
    {
        $vehicle = Vehicle::findOrFail($this->vehicleId);

        foreach ($items as $item) {
            VehicleServiceHistory::where(VehicleServiceHistory::R_VEHICLE_ID, $vehicle->id)
                ->where(VehicleServiceHistory::ID, $item['value'])
                ->update([VehicleServiceHistory::ORDER => $item[VehicleServiceHistory::ORDER]]);
        }
    }

    public function toggleSortOrder($field)
    {
        // Toggle the sort order
        $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';

        // Set the field to sort by
        $this->sortField = $field;
    }

    #[On('update.service.history')]
    public function render()
    {
        $services = Vehicle::find($this->vehicleId)->vehicleServicesHistory;

        // Apply sorting
        if ($this->sortOrder === 'asc' || $this->sortOrder === 'desc') {
            $services = $this->sortOrder === 'asc'
                ? $services->sortBy($this->sortField)
                : $services->sortByDesc($this->sortField);
        } else {
            $services = $services->sortBy(VehicleServiceHistory::ORDER);
        }

        return view('livewire.service-history-table', compact('services'));
    }
}