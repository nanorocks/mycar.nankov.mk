<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleServiceHistory extends Model
{
    use HasFactory;

    public const TABLE = 'services_history';

    public const ID = 'id';
    public const DATE = 'date';
    public const SERVICE_TYPE = 'service_type';
    public const DESCRIPTION = 'description';
    public const COST = 'cost';
    public const ORDER = 'order';

    public const R_VEHICLE_ID = 'vehicle_id';

    protected $table = self::TABLE;

    protected $fillable = [
        self::DATE,
        self::SERVICE_TYPE,
        self::COST,
        self::R_VEHICLE_ID,
        self::ORDER,
        self::DESCRIPTION
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastOrder = static::max(self::ORDER);
            $model->order = $lastOrder + 1;
        });
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
