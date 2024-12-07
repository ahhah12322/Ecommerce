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
            // Thêm giá trị mới 'Đã hủy' vào cột Status
            $table->enum('Status', ['Đang chờ', 'Đang diễn ra', 'Đã kết thúc', 'Đã hủy'])->default('Đang chờ')->change();

            // Thêm cột mới StatusPayment
            $table->enum('StatusPayment', ['Đã thanh toán', 'Chưa thanh toán', 'Đã cọc', 'Đền bù'])->default('Chưa thanh toán');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_contracts', function (Blueprint $table) {
            // Khôi phục lại cột Status về trạng thái ban đầu
            $table->enum('Status', ['Đang chờ', 'Đang diễn ra', 'Đã kết thúc'])->default('Đang chờ')->change();

            // Xóa cột StatusPayment
            $table->dropColumn('StatusPayment');
        });
    }
};
