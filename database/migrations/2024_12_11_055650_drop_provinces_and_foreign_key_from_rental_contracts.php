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
            // Xóa khóa ngoại và cột ProvinceID
            $table->dropForeign(['ProvinceID']);
            $table->dropColumn('ProvinceID');

            // Thêm cột location
            $table->string('location', 255)->nullable()->after('VehicleID');
    });

        // Xóa bảng provinces
        Schema::dropIfExists('provinces');
    }

    public function down(): void
    {
        // Tạo lại bảng provinces
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('ProvinceCode', 3)->unique();
            $table->timestamps();
        });

        // Thêm lại cột ProvinceID trong bảng rental_contracts
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->foreignId('ProvinceID')->nullable()
                ->constrained('provinces')
                ->onDelete('set null')
                ->after('VehicleID');
        });

        // Xóa cột location
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->dropColumn('location');
        });
    }

};
