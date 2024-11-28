<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVehicleTypeIdToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->bigInteger('vehicle_type_id')->unsigned()->after('CategoryID'); // Thêm cột vehicle_type_id làm khóa ngoại
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types')->onDelete('cascade'); // Định nghĩa khóa ngoại
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['vehicle_type_id']); // Xóa ràng buộc khóa ngoại
            $table->dropColumn('vehicle_type_id'); // Xóa cột vehicle_type_id
        });
    }
}

