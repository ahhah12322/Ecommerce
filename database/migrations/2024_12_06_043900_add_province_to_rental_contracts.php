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
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->foreignId('ProvinceID')->nullable()
                ->constrained('provinces') // Liên kết với bảng provinces
                ->onDelete('set null')    // Khi xóa tỉnh, trường ProvinceID sẽ tự động set null
                ->after('VehicleID');    // Thêm sau cột VehicleID
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->dropForeign(['ProvinceID']);
            $table->dropColumn('ProvinceID');
        });
    }
};
