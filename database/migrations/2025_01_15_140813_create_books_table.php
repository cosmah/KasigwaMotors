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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('nin');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('car_model');
            $table->string('car_make');
            $table->string('car_color');
            $table->integer('car_price');
            $table->string('car_mileage');
            $table->integer('car_quantity');
            $table->string('car_fuel');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
