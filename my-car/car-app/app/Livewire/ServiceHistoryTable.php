<?php

namespace App\Livewire;

use App\Models\VehicleServiceHistory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class ServiceHistoryTable extends Component
{

    public bool $isEditMode = false;

    public VehicleServiceHistory $item;

    public $services;

    public function addNeededService()
    {
        $this->reset('service');
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

    #[On('update.service.history')]
    public function mount()
    {
        $this->services = Auth::user()->vehicle->vehicleServicesHistory;
    }

    public function render()
    {
        return view('livewire.service-history-table');
    }
}
