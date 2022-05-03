<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer',function(Blueprint $table){
            $table->increments('customer_code');
            $table->string('fullname',50);
            $table->char('phone_number',10);
            $table->date('birthday');
            $table->char('ID_card',12);
            $table->string('address',100);
            $table->string('user',50)->unique();
            $table->string('password',50);
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
