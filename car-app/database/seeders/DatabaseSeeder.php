<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Andrej Nankov',
            'email' => 'andrejnankov@gmail.com',
        ]);

        $vehicle = \App\Models\Vehicle::create([
            'name' => '2013 Citroen C-Elysee',
            'vehicle_register_number' => 'SK 6840 BM',
            'other' => '<iframe title="2023 Citroen C-Elysee" frameborder="0" allowfullscreen mozallowfullscreen="true"
                webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                execution-while-out-of-viewport execution-while-not-rendered web-share
                src="https://sketchfab.com/models/a4c9631f9167430e97f5eed9e8bc7040/embed" height="480" class="w-100">
            </iframe>',
            'user_id' => $user->id
        ]);

        \App\Models\VehicleAttribute::create([
            'attribute' => 'Model',
            'value' => 'Citroen C-Elysee',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleAttribute::create([
            'attribute' => 'Year',
            'value' => 'SK 6840 BM',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleAttribute::create([
            'attribute' => 'Color',
            'value' => 'White',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleNeededService::create([
            'service_type' => 'Oil Change',
            'date' => '2023-01-15',
            'recommended_interval' => 'Every 5,000 miles',
            'last_service_date' => '2023-01-15',
            'next_service_due' => '2023-06-15',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleNeededService::create([
            'service_type' => 'Tire Rotation',
            'date' => '2023-01-15',
            'recommended_interval' => 'Every 10,000 miles',
            'last_service_date' => '2023-04-22',
            'next_service_due' => '2023-08-22',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleServiceHistory::create([
            'date' => '2023-01-15',
            'service_type' => 'Oil Change',
            'description' => 'Changed engine oil and oil filter. Checked other fluids.',
            'cost' => '$50.00',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleServiceHistory::create([
            'date' => '2023-01-15',
            'service_type' => 'Tire Rotation',
            'description' => 'Rotated all four tires and checked tire pressure.',
            'cost' => '$150.00',
            'vehicle_id' => $vehicle->id
        ]);

        \App\Models\VehicleServiceHistory::create([
            'date' => '2023-01-15',
            'service_type' => 'Brake Inspection',
            'description' => 'Inspected brake pads, discs, and fluid levels.',
            'cost' => '$0.00 (Free inspection)',
            'vehicle_id' => $vehicle->id
        ]);
    }
}