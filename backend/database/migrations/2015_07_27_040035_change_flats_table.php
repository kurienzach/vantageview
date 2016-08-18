<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flats', function (Blueprint $table) {
            $table->dropColumn(['ownership', 'total_basic', 'category_rate', 'category_charges', 'floor_rate', 'floor_rise_charge', 'club_house_charges', 'total_cost', 'car_park']);
            $table->decimal('agreement_value', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flats', function (Blueprint $table) {
            $table->string('ownership');
            $table->decimal('total_basic', 10, 2);
            $table->decimal('category_rate', 10, 2);
            $table->decimal('category_charges', 10, 2);
            $table->decimal('floor_rate', 10, 2);
            $table->decimal('floor_rise_charge', 10, 2);
            $table->decimal('club_house_charges', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->decimal('car_park', 10, 2);
            $table->dropColumn(['agreement_value']);
        });
    }
}
