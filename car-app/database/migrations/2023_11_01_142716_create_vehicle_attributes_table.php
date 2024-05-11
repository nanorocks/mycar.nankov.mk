<?php

use App\Models\Vehicle;
use App\Models\VehicleAttribute;
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
        Schema::create(VehicleAttribute::TABLE, function (Blueprint $table) {
            $table->id();

            $table->string(VehicleAttribute::ATTRIBUTE);
            $table->string(VehicleAttribute::VALUE);

            $table->unsignedBigInteger(VehicleAttribute::R_VEHICLE_ID);
            $table->foreign(VehicleAttribute::R_VEHICLE_ID)
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
        Schema::dropIfExists(VehicleAttribute::TABLE);
    }
};
