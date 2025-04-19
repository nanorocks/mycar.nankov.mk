<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddNewVehicle extends Component
{
    public $name;
    public $vehicle_register_number;
    public $other;

    public $isModalOpen = false;

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->reset();
        $this->resetValidation(); 
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'vehicle_register_number' => 'required|string|max:255|unique:vehicles,vehicle_register_number',
        'other' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Vehicle::create([
            'name' => $this->name,
            'vehicle_register_number' => $this->vehicle_register_number,
            'other' => $this->other,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'Vehicle created successfully!');

        $this->reset(); // Reset the form fields

        $this->closeModal(); // Close the modal
        // $this->emit('vehicleCreated'); // Emit an event
    }

    public function render()
    {
        return view('livewire.add-new-vehicle');
    }
}
