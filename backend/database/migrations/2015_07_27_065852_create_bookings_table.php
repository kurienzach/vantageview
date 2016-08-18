<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            // Project related
            $table->string('project_name', 50);
            $table->string('flat_id', 10);
            $table->string('rel_manager', 100);
            $table->string('heard_src', 100);

            // Customer Related
            $table->string('cust_name', 100);
            $table->string('cust_mail', 100);
            $table->string('cust_mobile', 15);
            $table->text('cust_address', 200);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('pincode', 20);
            $table->string('panno', 20);
            $table->string('coapplicant', 100);

            // Payment related
            $table->string('booking_id', 50);
            $table->decimal('amount', 10, 2);
            $table->string('txnreferenceno', 100);
            $table->string('bankreferenceno', 100);
            $table->string('statuscode', 10);
            $table->string('paymentstatus', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
