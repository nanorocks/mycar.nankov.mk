<?php

use App\Models\VehicleServiceHistory;
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
        Schema::table(VehicleServiceHistory::TABLE, function (Blueprint $table) {
            $table->integer(VehicleServiceHistory::ORDER);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(VehicleServiceHistory::TABLE, function (Blueprint $table) {
            $table->dropColumn(VehicleServiceHistory::ORDER);
        });
    }
};
