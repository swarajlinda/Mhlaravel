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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // Name of the person booking
            $table->string('mobile', 10); // Mobile number
            $table->string('email', 255); // Mobile number
            $table->date('check_in'); // Check-in date
            $table->date('check_out'); // Check-out date
            $table->integer('guests'); // Number of guests
            $table->string('room_type', 255); // Mobile number
            $table->boolean('is_deleted')->default(0); // Soft delete flag
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
