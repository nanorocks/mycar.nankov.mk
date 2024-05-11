<?php

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Vehicle::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Vehicle::NAME);
            $table->string(Vehicle::VEHICLE_REGISTER_NUMBER);
            $table->text(Vehicle::OTHER);

            $table->unsignedBigInteger(Vehicle::R_USER_ID); // Change to unsignedBigInteger for consistency
            $table->foreign(Vehicle::R_USER_ID)
                ->references(User::ID)
                ->on(User::TABLE)
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
        Schema::dropIfExists(Vehicle::TABLE);
    }
};
