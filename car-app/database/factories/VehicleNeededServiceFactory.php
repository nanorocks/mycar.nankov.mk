<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\VehicleNeededService;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleNeededServiceFactory extends Factory
{
    protected $model = VehicleNeededService::class;

    public function definition()
    {
        return [
            VehicleNeededService::SERVICE_TYPE => $this->faker->randomElement(['Oil Change', 'Tire Rotation', 'Brake Inspection']),
            VehicleNeededService::DATE => $this->faker->date(),
            VehicleNeededService::RECOMMENDED_INTERVAL => $this->faker->randomElement(['Every 5,000 miles', 'Every 10,000 miles']),
            VehicleNeededService::LAST_SERVICE_DATE => $this->faker->date(),
            VehicleNeededService::NEXT_SERVICE_DUE => $this->faker->date(),
            VehicleNeededService::R_VEHICLE_ID => Vehicle::factory(), // Associate with a vehicle
        ];
    }
}