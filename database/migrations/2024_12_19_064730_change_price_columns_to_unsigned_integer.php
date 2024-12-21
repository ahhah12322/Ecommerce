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
            // Đổi kiểu dữ liệu các cột giá thành số nguyên không dấu
            $table->unsignedInteger('rental_price_per_hour')->change();
            $table->unsignedInteger('rental_price_per_day')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Đổi lại kiểu dữ liệu về decimal(8,2)
            $table->decimal('rental_price_per_hour', 8, 2)->change();
            $table->decimal('rental_price_per_day', 8, 2)->change();
        });
    }
};
