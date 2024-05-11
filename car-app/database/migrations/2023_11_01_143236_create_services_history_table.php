<?php

use App\Models\Vehicle;
use App\Models\VehicleServiceHistory;
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
        Schema::create(VehicleServiceHistory::TABLE, function (Blueprint $table) {
            $table->id();

            $table->string(VehicleServiceHistory::DATE);
            $table->string(VehicleServiceHistory::SERVICE_TYPE);
            $table->string(VehicleServiceHistory::DESCRIPTION);
            $table->string(VehicleServiceHistory::COST);

            $table->unsignedBigInteger(VehicleServiceHistory::R_VEHICLE_ID);
            $table->foreign(VehicleServiceHistory::R_VEHICLE_ID)
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
        Schema::dropIfExists(VehicleServiceHistory::TABLE);
    }
};
