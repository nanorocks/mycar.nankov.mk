<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Vehicle extends Component
{
    public function render()
    {
        return view('livewire.vehicle')->with([
            'vehicle' => Auth::user()->vehicle,
        ]);
    }
}
