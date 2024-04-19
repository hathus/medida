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
        Schema::table('medical_appointments', function (Blueprint $table) {
            $table->addColumn('float', 'tmb')->after('imc')->nullable();
            $table->addColumn('float', 'tmt')->after('exercised')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_appointments', function (Blueprint $table) {
            $table->dropColumn('tmb');
            $table->dropColumn('tmt');
        });
    }
};
