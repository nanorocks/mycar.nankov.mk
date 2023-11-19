<?php

namespace App\Livewire\Forms;

use App\Models\VehicleNeededService;
use Livewire\Attributes\Rule;
use Livewire\Form;

class NeededServiceForm extends Form
{
    #[Rule('required')]
    public ?string $date;

    #[Rule('required')]
    public ?string $service_type;

    #[Rule('required')]
    public ?string $recommended_interval;

    #[Rule('required')]
    public ?string $last_service_date;

    #[Rule('required')]
    public ?string $next_service_due;

    #[Rule('required')]
    public ?int $vehicle_id;

    public ?int $id;

    public function update()
    {
        $service = VehicleNeededService::find($this->id);

        $service->date = $this->date;
        $service->service_type = $this->service_type;
        $service->recommended_interval = $this->recommended_interval;
        $service->last_service_date = $this->last_service_date;
        $service->next_service_due = $this->next_service_due;

        $service->save();
    }
}
