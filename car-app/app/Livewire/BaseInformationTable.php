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

    public $services;

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

    #[On('update.base.information')]
    public function mount()
    {
        $this->services = Auth::user()->vehicle->vehicleAttributes;
    }

    public function render()
    {
        return view('livewire.base-information-table');
    }
}