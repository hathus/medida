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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('age');
            $table->string('phone');
            $table->integer('gender');
            $table->string('city');
            //$table->integer('state');
            $table->integer('weight');
            $table->float('size');
            $table->integer('glucose');
            $table->float('imc');
            $table->integer('exercised');
            $table->integer('fast_food');
            $table->integer('smoking');
            $table->integer('alcoholism');
            $table->integer('drugs');
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
