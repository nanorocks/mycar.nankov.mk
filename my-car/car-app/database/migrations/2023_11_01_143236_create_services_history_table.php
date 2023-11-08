<?php

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
        Schema::create('services_history', function (Blueprint $table) {
            $table->id();

            $table->string('date');
            $table->string('service_type');
            $table->string('description');
            $table->string('cost');

            $table->unsignedInteger('vehicle_id');
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles')
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
        Schema::dropIfExists('services_history');
    }
};
