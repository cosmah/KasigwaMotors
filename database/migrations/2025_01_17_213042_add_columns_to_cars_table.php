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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('car_color')->nullable()->after('year');
            $table->integer('car_price')->nullable()->after('car_color');
            $table->string('car_mileage')->nullable()->after('car_price');
            $table->string('car_fuel')->nullable()->after('car_mileage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['car_color', 'car_price', 'car_mileage', 'car_fuel']);
        });
    }
};