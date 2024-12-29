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
                $table->unsignedBigInteger('passenger_id'); // Foreign key to passengers table
                $table->unsignedBigInteger('driver_id')->nullable(); // Foreign key to drivers table, nullable
                $table->unsignedBigInteger('vehicle_id')->nullable(); // Foreign key to vehicles table, nullable
                $table->string('pickup_location'); // Pickup location (string)
                $table->string('dropoff_location'); // Dropoff location (string)
                $table->decimal('fare', 10, 2); // Fare (decimal with 10 digits and 2 decimal places)
                $table->dateTime('pickup_time'); // Pickup time (datetime)
                $table->dateTime('dropoff_time')->nullable(); // Dropoff time (datetime, nullable)
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
