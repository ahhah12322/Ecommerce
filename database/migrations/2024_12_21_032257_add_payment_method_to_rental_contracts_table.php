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
            // Thêm cột PaymentMethod với giá trị mặc định là 'Cash'
            $table->string('payment_method')->default('Cash');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_contracts', function (Blueprint $table) {
            // Xóa cột PaymentMethod nếu rollback migration
            $table->dropColumn('payment_method');
        });
    }
};
