<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use App\Models\VehicleServiceHistory;
use App\Livewire\Forms\ServiceHistoryForm;

class CreateEditServiceHistory extends Component
{
    public ServiceHistoryForm $form;

    public bool $isEditMode = false;

    public VehicleServiceHistory $service;

    public function update()
    {
        $this->validate();

        $this->form->update();

        session()->flash('status', 'Service history successfully updated.');

        $this->dispatch('update.service.history');
    }

    #[On('new.service.history')]
    public function new()
    {
        $this->form->reset();

        $this->isEditMode = false;
    }

    public function add()
    {
        $this->form->vehicle_id = Auth::user()->vehicle->id;

        $this->validate();

        VehicleServiceHistory::create($this->form->all());

        session()->flash('status', 'Service history successfully added.');

        $this->dispatch('update.service.history');

        $this->form->reset();
    }

    #[On('edit.service.history')]
    public function edit(int $id)
    {
        $this->isEditMode = true;

        $vsh = VehicleServiceHistory::find($id);

        $this->form->date = $vsh->date;
        $this->form->service_type = $vsh->service_type;
        $this->form->description = $vsh->description;
        $this->form->cost = $vsh->cost;
        $this->form->id = $vsh->id;
        $this->form->vehicle_id = $vsh->vehicle_id;
    }

    public function render()
    {
        return view('livewire.create-edit-service-history');
    }
}