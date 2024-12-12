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
            $table->datetime('RentalStartDate')->nullable()->change();
            $table->datetime('RentalEndDate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rental_contracts', function (Blueprint $table) {
            $table->date('RentalStartDate')->nullable()->change();
            $table->date('RentalEndDate')->nullable()->change();
        });
    }
};
