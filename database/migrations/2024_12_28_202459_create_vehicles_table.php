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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type'); // Type of the vehicle (e.g., 'Car', 'Bus')
            $table->string('vehicle_number')->unique(); // Unique vehicle number (string)
            $table->string('model'); // Model of the vehicle
            $table->integer('capacity'); // Vehicle capacity (integer)
            $table->string('owner_name'); 
            $table->string('owner_number')->unique(); 
            
            
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};