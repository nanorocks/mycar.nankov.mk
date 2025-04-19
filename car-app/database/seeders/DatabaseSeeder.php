<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random users
        \App\Models\User::factory(10)->create();

        // Create a specific user
        $user = \App\Models\User::factory()->create([
            'name' => 'Andrej Nankov',
            'email' => 'andrejnankov@gmail.com',
        ]);

        // Create 3 vehicles for the specific user
        $vehicles = \App\Models\Vehicle::factory(100)->create([
            'user_id' => $user->id,
        ]);

        // Attach related models to each vehicle
        foreach ($vehicles as $vehicle) {
            \App\Models\VehicleAttribute::factory()
                ->count(3)
                ->create(['vehicle_id' => $vehicle->id]);

            \App\Models\VehicleNeededService::factory()
                ->count(2)
                ->create(['vehicle_id' => $vehicle->id]);

            \App\Models\VehicleServiceHistory::factory()
                ->count(2)
                ->create(['vehicle_id' => $vehicle->id]);
        }
    }
}