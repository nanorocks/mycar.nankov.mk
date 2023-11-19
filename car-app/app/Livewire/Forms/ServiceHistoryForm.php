<?php

namespace App\Livewire\Forms;

use App\Models\VehicleServiceHistory;
use Livewire\Form;
use Livewire\Attributes\Rule;

class ServiceHistoryForm extends Form
{
    #[Rule('required')]
    public ?string $date;

    #[Rule('required')]
    public ?string $service_type;

    #[Rule('required')]
    public ?string $description;

    #[Rule('required')]
    public ?string $cost;

    #[Rule('required')]
    public ?int $vehicle_id;

    public ?int $id;

    public function update()
    {
        $service = VehicleServiceHistory::find($this->id);

        $service->date = $this->date;
        $service->service_type = $this->service_type;
        $service->description = $this->description;
        $service->cost = $this->cost;

        $service->save();
    }
}