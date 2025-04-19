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
        $vehicle = Auth::user()->vehicle;

        foreach ($items as $item) {
            VehicleServiceHistory::where(VehicleServiceHistory::R_VEHICLE_ID, $vehicle->id)
                ->where(VehicleServiceHistory::ID, $item['value'])
                ->update([VehicleServiceHistory::ORDER => $item[VehicleServiceHistory::ORDER]]);
        }
    }

    #[On('update.service.history')]
    public function render()
    {
        $services = Vehicle::find($this->vehicleId)->vehicleServicesHistory->sortBy(VehicleServiceHistory::ORDER);

        return view('livewire.service-history-table', compact('services'));
    }
}
