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
        Schema::create('vehicle_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id'); // ID của xe
            $table->timestamp('viewed_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Thời gian xem
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_views');
    }
};
