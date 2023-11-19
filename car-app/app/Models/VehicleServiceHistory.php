<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleServiceHistory extends Model
{
    use HasFactory;

    protected $table = 'services_history';

    protected $fillable = [
        'date',
        'service_type',
        'description',
        'cost',
        'vehicle_id'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
