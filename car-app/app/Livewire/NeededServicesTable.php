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
        $vehicle = Auth::user()->vehicle;

        foreach ($items as $item) {
            VehicleNeededService::where(VehicleNeededService::R_VEHICLE_ID, $vehicle->id)
                ->where(VehicleNeededService::ID, $item['value'])
                ->update([VehicleNeededService::ORDER => $item[VehicleNeededService::ORDER]]);
        }
    }

    #[On('update.needed.service')]
    public function render()
    {
        $services = Vehicle::find($this->vehicleId)->vehicleNeededServices->sortBy(VehicleNeededService::ORDER);

        return view('livewire.needed-services-table', compact('services'));
    }
}
