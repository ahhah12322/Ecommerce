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
            // Thêm cột CreationDate với kiểu dữ liệu timestamp
            $table->timestamp('CreationDate')->default(DB::raw('CURRENT_TIMESTAMP'))->after('RentalEndDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->dropColumn('CreationDate');
        });
    }
};
