<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tour_id');
            $table->string('guest_name',120);
            $table->string('guest_last_name',120);
            $table->string('guest_email');
            $table->string('guest_hotel_name',220);
            $table->date('guest_departure_date');
            $table->integer('number_adults');
            $table->integer('number_children'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
