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
        Schema::create('diet_recipes', function (Blueprint $table) {
            $table->id();
            $table->integer('total_cal')->nullable();
            $table->integer('group')->nullable();
            $table->foreignId('medical_appointment_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diet_recipes');
    }
};
