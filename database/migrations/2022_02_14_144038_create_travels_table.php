<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('place_of_departure', 50);
            $table->string('place_of_destination', 50);
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('airline_company', 40);
            $table->string('class', 20);
            $table->tinyInteger('travelers');
            $table->string('hotel_name', 50);
            $table->tinyInteger('rooms');
            $table->tinyInteger('hotel_stars');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
