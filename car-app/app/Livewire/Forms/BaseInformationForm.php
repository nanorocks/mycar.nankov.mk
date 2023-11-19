<?php

namespace App\Livewire\Forms;

use App\Models\VehicleAttribute;
use Livewire\Attributes\Rule;
use Livewire\Form;

class BaseInformationForm extends Form
{
    #[Rule('required')]
    public ?string $attribute;

    #[Rule('required')]
    public ?string $value;

    #[Rule('required')]
    public ?int $vehicle_id;

    public ?int $id;

    public function update()
    {
        $service = VehicleAttribute::find($this->id);

        $service->attribute = $this->attribute;
        $service->value = $this->value;

        $service->save();
    }
}