<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleNeededService extends Model
{
    use HasFactory;

    public const TABLE = 'needed_services';

    public const ID = 'id';
    public const DATE = 'date';
    public const SERVICE_TYPE = 'service_type';
    public const RECOMMENDED_INTERVAL = 'recommended_interval';
    public const LAST_SERVICE_DATE = 'last_service_date';
    public const NEXT_SERVICE_DUE = 'next_service_due';
    public const ORDER = 'order';

    public const R_VEHICLE_ID = 'vehicle_id';

    protected $table = self::TABLE;

    protected $fillable = [
        self::DATE,
        self::SERVICE_TYPE,
        self::RECOMMENDED_INTERVAL,
        self::LAST_SERVICE_DATE,
        self::NEXT_SERVICE_DUE,
        self::R_VEHICLE_ID,
        self::ORDER
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
