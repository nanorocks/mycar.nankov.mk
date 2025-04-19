<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\VehicleServiceHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleServiceHistoryFactory extends Factory
{
    protected $model = VehicleServiceHistory::class;

    public function definition()
    {
        return [
            VehicleServiceHistory::DATE => $this->faker->date(),
            VehicleServiceHistory::SERVICE_TYPE => $this->faker->randomElement(['Brake Repair', 'Battery Replacement']),
            VehicleServiceHistory::DESCRIPTION => $this->faker->sentence(),
            VehicleServiceHistory::COST => $this->faker->randomFloat(2, 50, 500),
            VehicleServiceHistory::R_VEHICLE_ID => Vehicle::factory(), // Associate with a vehicle
        ];
    }
}