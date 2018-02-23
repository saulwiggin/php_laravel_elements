<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Customer_delivery', function (Blueprint $table) {
           // $table->increments('id');
           // $table->string('First_name');
           // $table->string('Last_name');
           // $table->string('Address_1');
           // $table->string('Address_2');
           // $table->string('Postcode');
           // $table->string('Country');
           // $table->string('Phone');
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
        Schema::table('Customer_delivery', function (Blueprint $table) {
            Schema::drop('Customer_delivery');
        });
    }
}
