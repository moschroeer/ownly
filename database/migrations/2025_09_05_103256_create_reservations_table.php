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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pending', 'approved', 'lended','returned','cancelled'])->default('pending');
            $table->timestamp('start_use')->nullable();
            $table->timestamp('end_use')->nullable();
            $table->foreignId('borrower_id');
            $table->foreignId('item_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
