<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab',function(Blueprint $table){
            $table->increments('cab_code');
            $table->string('car_name',50);
            $table->integer('type_code')->unsigned();
            $table->integer('brand_code')->unsigned();
            $table->float('price');
            $table->string('license_plate',50);
            $table->string('status',50);
            $table->text('description');
            $table->foreign('type_code')->references('type_code')->on('car_type');
            $table->foreign('brand_code')->references('brand_code')->on('car_brand');
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
