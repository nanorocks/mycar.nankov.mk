<?php

namespace App\Livewire;

use App\Livewire\Forms\NeededServiceForm;
use App\Models\VehicleNeededService;
use App\Models\VehicleServiceHistory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class CreateEditNeededService extends Component
{
    public NeededServiceForm $form;

    public bool $isEditMode = false;

    public VehicleServiceHistory $service;

    public function update()
    {
        $this->validate();

        $this->form->update();

        session()->flash('status', 'Needed service successfully updated.');

        $this->dispatch('update.needed.service');
    }

    #[On('new.needed.service')]
    public function new()
    {
        $this->form->reset();

        $this->isEditMode = false;
    }

    public function add()
    {
        $this->form->vehicle_id = Auth::user()->vehicle->id;

        $this->validate();

        VehicleNeededService::create($this->form->all());

        session()->flash('status', 'Needed service successfully added.');

        $this->dispatch('update.needed.service');

        $this->form->reset();
    }

    #[On('edit.needed.service')]
    public function edit(int $id)
    {
        $this->isEditMode = true;

        $item = VehicleNeededService::find($id);

        $this->form->date = $item->date;
        $this->form->service_type = $item->service_type;
        $this->form->recommended_interval = $item->recommended_interval;
        $this->form->last_service_date = $item->last_service_date;
        $this->form->next_service_due = $item->next_service_due;

        $this->form->id = $item->id;
        $this->form->vehicle_id = $item->vehicle_id;
    }

    public function render()
    {
        return view('livewire.create-edit-needed-service');
    }
}