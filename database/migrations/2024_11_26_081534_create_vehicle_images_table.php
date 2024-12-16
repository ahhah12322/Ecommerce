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
        Schema::create('vehicle_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('VehicleID'); // Foreign Key to vehicles table
            $table->string('ImageURL', 255); // Image URL
            $table->boolean('IsMainImage')->default(false); // Main image flag
            $table->timestamps(); // Created_at and updated_at timestamps

            // Foreign Key Constraint
            $table->foreign('VehicleID')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_images');
    }
};
