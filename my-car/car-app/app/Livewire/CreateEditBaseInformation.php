<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\VehicleAttribute;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Forms\BaseInformationForm;

class CreateEditBaseInformation extends Component
{
    public BaseInformationForm $form;

    public bool $isEditMode = false;

    public VehicleAttribute $service;

    public function update()
    {
        $this->validate();

        $this->form->update();

        session()->flash('status', 'Base information successfully updated.');

        $this->dispatch('update.base.information');
    }

    #[On('new.base.information')]
    public function new()
    {
        $this->form->reset();

        $this->isEditMode = false;
    }

    public function add()
    {
        $this->form->vehicle_id = Auth::user()->vehicle->id;

        $this->validate();

        VehicleAttribute::create($this->form->all());

        session()->flash('status', 'Base information successfully added.');

        $this->dispatch('update.base.information');

        $this->form->reset();
    }

    #[On('edit.base.information')]
    public function edit(int $id)
    {
        $this->isEditMode = true;

        $item = VehicleAttribute::find($id);

        $this->form->attribute = $item->attribute;
        $this->form->value = $item->value;

        $this->form->id = $item->id;
        $this->form->vehicle_id = $item->vehicle_id;
    }

    public function render()
    {
        return view('livewire.create-edit-base-information');
    }
}