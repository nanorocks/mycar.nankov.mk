<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleNeededService extends Model
{
    use HasFactory;

    protected $table = 'needed_services';

    protected $fillable = [
        'date',
        'service_type',
        'recommended_interval',
        'last_service_date',
        'next_service_due',
        'vehicle_id'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
