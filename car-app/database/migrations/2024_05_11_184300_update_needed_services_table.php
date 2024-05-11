<?php

use App\Models\VehicleNeededService;
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
        Schema::table(VehicleNeededService::TABLE, function (Blueprint $table) {
            $table->integer(VehicleNeededService::ORDER);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(VehicleNeededService::TABLE, function (Blueprint $table) {
            $table->dropColumn(VehicleNeededService::ORDER);
        });
    }
};
