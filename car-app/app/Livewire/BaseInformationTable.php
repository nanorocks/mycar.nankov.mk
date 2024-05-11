<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\VehicleAttribute;
use Illuminate\Support\Facades\Auth;

class BaseInformationTable extends Component
{
    public bool $isEditMode = false;

    public VehicleAttribute $item;

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
        $services = Auth::user()->vehicle->vehicleAttributes->sortBy(VehicleAttribute::ORDER);

        return view('livewire.base-information-table', compact('services'));
    }
}
