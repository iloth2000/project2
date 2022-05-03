<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract',function(Blueprint $table){
            $table->increments('contract_code');
            $table->integer('customer_code')->unsigned();
            $table->integer('cab_code')->unsigned();
            $table->float('deposit');
            $table->float('daily_rental_price');
            $table->date('return_cars_date');
            $table->date('date_of_hire');
            $table->date('expiration_date');
            $table->string('status',50);
            $table->foreign('cab_code')->references('cab_code')->on('cab');
            $table->foreign('customer_code')->references('customer_code')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
