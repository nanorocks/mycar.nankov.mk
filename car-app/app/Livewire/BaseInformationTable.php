<?php

namespace App\Livewire;

use App\Models\Vehicle;
use App\Models\VehicleAttribute;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class BaseInformationTable extends Component
{
    public bool $isEditMode = false;

    public VehicleAttribute $item;

    public $vehicleId;
 
    public function mount($vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }

    public function new()
    {
        $this->dispatch('new.base.information');
    }

    public function edit(int $id)
    {
        $this->dispatch('edit.base.information', $id);
    }

    public function delete($id)
    {
        VehicleAttribute::find($id)->delete();

        $this->dispatch('update.base.information');
    }

    public function updateItemOrder(array $items)
    {
        $vehicle = Auth::user()->vehicle;

        foreach ($items as $item) {
            VehicleAttribute::where(VehicleAttribute::R_VEHICLE_ID, $vehicle->id)
                ->where(VehicleAttribute::ID, $item['value'])
                ->update([VehicleAttribute::ORDER => $item[VehicleAttribute::ORDER]]);
        }
    }

    #[On('update.base.information')]
    public function render()
    {
        $services = Vehicle::find($this->vehicleId)->vehicleAttributes->sortBy(VehicleAttribute::ORDER);
       
        return view('livewire.base-information-table', compact('services'));
    }
}
