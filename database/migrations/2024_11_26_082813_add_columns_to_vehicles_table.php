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
        Schema::table('vehicles', function (Blueprint $table) {
            // Thêm cột mới vào bảng vehicles
            $table->string('VehicleName')->nullable(); // Cột mới (kiểu string)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Xóa cột mới nếu rollback
            $table->dropColumn('VehicleName');
        });
    }
};
