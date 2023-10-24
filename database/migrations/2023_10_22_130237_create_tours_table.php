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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tour_title', 100);
            $table->string('tour_code', 100);
            $table->string('tour_duration',80);
           // $table->foreignId('category_id');
            $table->string('tour_description_name',100);
            $table->text('tour_description');
            $table->string('tour_description_departure_return',150);
            $table->string('tour_description_departure_time',150);
            $table->text('tour_description_included');
            $table->text('tour_description_not_included');
            $table->string('tour_description_details_file',150);
            $table->text('tour_itinarary');
            // $table->integer('tour_itinarary_duration');
            // $table->text('tour_itinarary_day_description');
            $table->string('tour_location_link',350);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
