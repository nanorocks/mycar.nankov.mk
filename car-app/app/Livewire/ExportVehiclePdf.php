<?php

namespace App\Livewire;

use App\Models\Vehicle;
use App\Models\VehicleServiceHistory;
use Livewire\Component;
use TCPDF;

class ExportVehiclePdf extends Component
{
    public ?Vehicle $vehicle = null;

    public bool $showModal = false;

    public array $selectedColumns = [
        'date' => true,
        'service_type' => true,
        'description' => true,
        'cost' => true,
    ];

    public array $availableColumns = [
        'date' => 'Date',
        'service_type' => 'Service Type',
        'description' => 'Description',
        'cost' => 'Cost',
    ];

    public function mount($vehicleId)
    {
        $this->vehicle = Vehicle::with('user')->findOrFail($vehicleId);
    }

    public function export()
    {
        if (empty(array_filter($this->selectedColumns))) {
            session()->flash('error', 'Please select at least one column.');
            return;
        }

        return redirect()->route('export.vehicle.pdf', ['vehicleId' => $this->vehicle->id]);
    }

    public function render()
    {
        return view('livewire.export-vehicle-pdf');
    }
}