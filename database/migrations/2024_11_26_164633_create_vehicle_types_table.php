<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
public function up(): void
    {
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id(); // Tạo cột id
            $table->string('name'); // Tạo cột name lưu tên loại xe (ví dụ: "Oto Điện", "Xe Máy Điện")
            $table->timestamps(); // Thêm cột thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_types'); // Xóa bảng khi rollback
    }
};
