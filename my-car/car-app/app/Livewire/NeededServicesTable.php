<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\VehicleNeededService;
use Illuminate\Support\Facades\Auth;

class NeededServicesTable extends Component
{
    public bool $isEditMode = false;

    public VehicleNeededService $item;

    public $services;

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

    #[On('update.needed.service')]
    public function mount()
    {
        $this->services = Auth::user()->vehicle->vehicleNeededServices;
    }


    public function render()
    {
        return view('livewire.needed-services-table');
    }
}