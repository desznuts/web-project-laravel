<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('tickets');
            $table->string('payment_method');
            $table->string('special_requests')->nullable();
            $table->string('card_title'); // Store the card title directly
            $table->string('card_date'); // Store the card date directly
            $table->decimal('card_price', 10, 2); // Store the card price directly
            $table->decimal('total_price', 10, 2); // Store the total price directly
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
        Schema::dropIfExists('bookings');
    }
}
