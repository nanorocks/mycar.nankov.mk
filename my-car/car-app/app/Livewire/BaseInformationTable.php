<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BaseInformationTable extends Component
{
    public function render()
    {
        return view('livewire.base-information-table')->with([
            'attributes' => Auth::user()->vehicle->vehicleAttributes,
        ]);
    }
}
