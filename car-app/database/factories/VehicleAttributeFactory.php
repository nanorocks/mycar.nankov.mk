<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\VehicleAttribute;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleAttributeFactory extends Factory
{
    protected $model = VehicleAttribute::class;

    public function definition()
    {
        return [
            VehicleAttribute::ATTRIBUTE => $this->faker->randomElement(['Model', 'Year', 'Color', 'Engine']),
            VehicleAttribute::VALUE => $this->faker->word(),
            VehicleAttribute::R_VEHICLE_ID => Vehicle::factory(), // Associate with a vehicle
        ];
    }
}