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
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id')->constrained()->onDelete('cascade');
            $table->integer('blood_pressure_systolic');
            $table->integer('blood_pressure_diastolic');
            $table->string('blood_pressure_rating');
            $table->integer('blood_saturation');
            $table->string('blood_saturation_rating');
            $table->float('temperature');
            $table->string('temperature_rating');
            $table->integer('pulse_rate');
            $table->string('pulse_rate_rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readings');
    }
};
