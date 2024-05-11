<?php

use App\Models\Vehicle;
use App\Models\VehicleNeededService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(VehicleNeededService::TABLE, function (Blueprint $table) {
            $table->id();

            $table->string(VehicleNeededService::DATE);
            $table->string(VehicleNeededService::SERVICE_TYPE);
            $table->string(VehicleNeededService::RECOMMENDED_INTERVAL);
            $table->string(VehicleNeededService::LAST_SERVICE_DATE);
            $table->string(VehicleNeededService::NEXT_SERVICE_DUE);

            $table->unsignedBigInteger(VehicleNeededService::R_VEHICLE_ID);
            $table->foreign(VehicleNeededService::R_VEHICLE_ID)
                ->references(Vehicle::ID)
                ->on(Vehicle::TABLE)
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(VehicleNeededService::TABLE);
    }
};
