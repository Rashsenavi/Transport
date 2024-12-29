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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name (string)
            $table->string('address')->nullable();  // Address (nullable)
            $table->string('mobile')->unique();  // Phone number (unique)
            $table->string('license_number')->unique(); // License number (unique)
            $table->unsignedBigInteger('vehicle_id')->nullable(); // Foreign key, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
