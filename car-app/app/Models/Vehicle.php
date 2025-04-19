<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public const TABLE = 'vehicles';

    public const ID = 'id';
    public const NAME = 'name';
    public const VEHICLE_REGISTER_NUMBER = 'vehicle_register_number';
    public const OTHER = 'other';
    public const R_USER_ID = 'user_id';

    // Relationship constants
    public const RELATION_ATTRIBUTES = 'vehicleAttributes';
    public const RELATION_NEEDED_SERVICES = 'vehicleNeededServices';
    public const RELATION_SERVICE_HISTORY = 'vehicleServicesHistory';
   

    protected $table = self::TABLE;

    protected $fillable = [
        self::NAME,
        self::VEHICLE_REGISTER_NUMBER,
        self::OTHER,
        self::R_USER_ID,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicleAttributes()
    {
        return $this->hasMany(VehicleAttribute::class, 'vehicle_id', 'id');
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
