<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            Vehicle::NAME => $this->faker->randomElement([
                'Toyota Corolla', 
                'Honda Civic', 
                'Ford Mustang', 
                'Chevrolet Camaro', 
                'Tesla Model S', 
                'BMW 3 Series', 
                'Audi A4', 
                'Mercedes-Benz C-Class', 
                'Volkswagen Golf', 
                'Subaru Impreza'
            ]),
            Vehicle::VEHICLE_REGISTER_NUMBER => strtoupper($this->faker->bothify('?? #### ??')),
            Vehicle::OTHER => '<iframe title="car" frameborder="0" allowfullscreen mozallowfullscreen="true"
                webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                execution-while-out-of-viewport execution-while-not-rendered web-share
                src="https://sketchfab.com/models/example/embed" height="480" class="w-100">
            </iframe>',
            Vehicle::R_USER_ID => User::factory(), // Associate with a user
        ];
    }
}