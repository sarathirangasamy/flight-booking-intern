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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();

            $table->string('name')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('discount_amount', 10, 2)->nullable();

            // Flight-specific fields
            $table->string('trip_type')->nullable(); 
            $table->string('leaving_from')->nullable();
            $table->date('departure_date')->nullable();
            $table->date('return_date')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->integer('rooms')->nullable();
            $table->string('class_type')->nullable();
            $table->integer('no_of_days')->nullable();

            // Hotel-specific fields
            $table->string('going_to')->nullable();
            $table->date('checkin_date')->nullable();
            $table->date('checkout_date')->nullable();

            // Car rental-specific fields
            $table->string('pickup_location')->nullable();
            $table->string('drop_location')->nullable();
            $table->date('date')->nullable();
            $table->json('car_type')->nullable();
            $table->json('facility')->nullable();
            $table->integer('offer')->nullable();
            $table->date('cancellation_date')->nullable();

            // General fields
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
