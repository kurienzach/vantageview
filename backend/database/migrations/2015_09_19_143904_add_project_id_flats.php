<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectIdFlats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flats', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('booked_id')->unsigned()->nullable();

            $table->foreign('project_id')
                  ->references('id')->on('projects');

            $table->foreign('booked_id')
                  ->references('id')->on('bookings');
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
            $table->dropForeign('flats_project_id_foreign');
            $table->dropForeign('flats_booked_id_foreign');

            $table->dropColumn(['project_id']);
            $table->dropColumn(['booked_id']);
        });
    }
}
