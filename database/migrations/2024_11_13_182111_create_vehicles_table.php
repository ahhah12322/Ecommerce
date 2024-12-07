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
        // Tạo bảng mới
        Schema::create('vehicles', function (Blueprint $table) {
               $table->id(); $table->string('VehicleName');
             $table->bigInteger('BrandID')->unsigned();

    $table->bigInteger('CategoryID')->unsigned();
            $table->year('year_of_manufacture'); // Năm sản xuất
            $table->string('color'); // Màu sắc
            $table->string('license_plate'); // Biển số
            $table->integer('seat_number'); // Số ghế
            $table->string('chassis_number'); // Số khung
            $table->string('engine_number'); // Số máy
            $table->string('vehicle_color'); // Màu xe
            $table->text('description')->nullable(); // Mô tả
            $table->string('location'); // Địa điểm xe
            $table->integer('battery_capacity'); // Dung lượng pin
            $table->integer('max_range'); // Quãng đường di chuyển tối đa
            $table->enum('status', ['Sẵn sàng', 'Đang thuê', 'Bảo trì'])->default('Sẵn sàng'); // Trạng thái xe
            $table->decimal('rental_price_per_hour', 8, 2); // Giá thuê theo giờ
            $table->decimal('rental_price_per_day', 8, 2); // Giá thuê theo ngày
            $table->timestamps(); // Thời gian tạo và cập nhật

             // Add foreign key constraints
    $table->foreign('BrandID')->references('BrandID')->on('brands')->onDelete('cascade');
    $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
    $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
