<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Livewire\Component;

class VehicleComponent extends Component
{
    public $vehicleId;
 
    public function mount($vehicleId)
    {
        $this->vehicleId = $vehicleId;
    }

    public function render()
    {
        return view('livewire.vehicle-component', [
            'vehicle' => Vehicle::find($this->vehicleId),
        ]);
    }
}
