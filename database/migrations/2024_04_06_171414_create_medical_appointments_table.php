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
        Schema::create('medical_appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('weight');
            $table->float('size');
            $table->integer('glucose');
            $table->float('imc');
            $table->integer('exercised');
            $table->integer('fast_food');
            $table->integer('smoking');
            $table->integer('alcoholism');
            $table->integer('drugs');
            $table->float('body_temp')->default('36.5');
            $table->string('blood_pressure')->default('120/80');
            $table->string('allergies')->nullable();
            $table->text('diagnostic')->nullable();
            $table->text('treatment')->nullable();
            $table->foreignId('medical_record_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_appointments');
    }
};
