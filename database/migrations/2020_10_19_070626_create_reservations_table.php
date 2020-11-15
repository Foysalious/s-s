<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('booking_date');
            $table->time('booking_time');
            $table->integer('adult');
            $table->integer('child_under_120_cm');
            $table->integer('child_under_132_cm');
            $table->longText('address');
            $table->longText('message');
            $table->string('random')->unique();
            $table->boolean('payment_method');
            $table->string('arrived')->default('0');
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
        Schema::dropIfExists('reservations');
    }
}
