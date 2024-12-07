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
        Schema::create('rental_contracts', function (Blueprint $table) {
            $table->id('ContractID');
            $table->foreignId('CustomerID')->constrained('users')->onDelete('cascade');
            $table->foreignId('VehicleID')->constrained('vehicles')->onDelete('cascade');
            $table->date('RentalStartDate');
            $table->date('RentalEndDate');
            $table->decimal('TotalCost', 12, 2);
            $table->enum('Status', ['Đang chờ', 'Đang diễn ra', 'Đã kết thúc'])->default('Đang chờ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_contracts');
    }
};
