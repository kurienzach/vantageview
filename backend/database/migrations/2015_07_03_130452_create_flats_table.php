<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('flat_id');
            $table->string('ownership');
            $table->string('availability');
            $table->decimal('basic_rate', 10, 2);
            $table->string('area', 8);
            $table->decimal('total_basic', 10, 2);
            $table->string('category');
            $table->decimal('category_rate', 10, 2);
            $table->decimal('category_charges', 10, 2);
            $table->decimal('floor_rate', 10, 2);
            $table->decimal('floor_rise_charge', 10, 2);
            $table->string('type');
            $table->decimal('club_house_charges', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->decimal('other_charges', 10, 2);
            $table->decimal('car_park', 10, 2);
            $table->decimal('grand_total', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flats');
    }
}
