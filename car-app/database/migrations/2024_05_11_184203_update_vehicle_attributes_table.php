<?php

use App\Models\VehicleAttribute;
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
        Schema::table(VehicleAttribute::TABLE, function (Blueprint $table) {
            $table->integer(VehicleAttribute::ORDER);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(VehicleAttribute::TABLE, function (Blueprint $table) {
            $table->dropColumn(VehicleAttribute::ORDER);
        });
    }
};
