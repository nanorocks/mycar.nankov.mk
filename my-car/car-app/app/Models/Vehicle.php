<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicleAttributes()
    {
        return $this->hasMany(VehicleAttribute::class);
    }

    public function vehicleNeededServices()
    {
        return $this->hasMany(VehicleNeededService::class, 'vehicle_id', 'id');
    }

    public function vehicleServicesHistory()
    {
        return $this->hasMany(VehicleServiceHistory::class);
    }
}
