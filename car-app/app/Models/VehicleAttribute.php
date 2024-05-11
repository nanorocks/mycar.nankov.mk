<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAttribute extends Model
{
    use HasFactory;

    public const TABLE = 'vehicle_attributes';

    public const ID = 'id';
    public const ATTRIBUTE = 'attribute';
    public const VALUE = 'value';
    public const R_VEHICLE_ID = 'vehicle_id';
    public const ORDER = 'order';

    protected $table = self::TABLE;

    protected $fillable = [
        self::ATTRIBUTE,
        self::VALUE,
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
