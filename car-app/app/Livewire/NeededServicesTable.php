<?php

namespace App\Livewire;

use App\Models\Vehicle;
use App\Models\VehicleNeededService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class NeededServicesTable extends Component
{
    public bool $isEditMode = false;

    public VehicleNeededService $item;

    public $vehicleId;

    public string | null $sortOrder = null;
 
    public function mount($vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }

    public function new()
    {
        $this->dispatch('new.needed.service');
    }

    public function edit(int $id)
    {
        $this->dispatch('edit.needed.service', $id);
    }

    public function delete($id)
    {
        VehicleNeededService::find($id)->delete();

        $this->dispatch('update.needed.service');
    }

    public function updateItemOrder(array $items)
    {
        $vehicle = Vehicle::findOrFail($this->vehicleId);

        foreach ($items as $item) {
            VehicleNeededService::where(VehicleNeededService::R_VEHICLE_ID, $vehicle->id)
                ->where(VehicleNeededService::ID, $item['value'])
                ->update([VehicleNeededService::ORDER => $item[VehicleNeededService::ORDER]]);
        }
    }

    public function toggleSortOrder()
    {
        $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';
    }

    #[On('update.needed.service')]
    public function render()
    {
        $services = Vehicle::find($this->vehicleId)->vehicleNeededServices;

        // Default sorting by VehicleNeededService::ORDER
        if ($this->sortOrder === 'asc' || $this->sortOrder === 'desc') {
            $services = $this->sortOrder === 'asc'
                ? $services->sortBy('date')
                : $services->sortByDesc('date');
        } else {
            $services = $services->sortBy(VehicleNeededService::ORDER);
        }

        return view('livewire.needed-services-table', compact('services'));
    }
}