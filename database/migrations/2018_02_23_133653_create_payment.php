<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Customer_payment', function (Blueprint $table) {
          $table->string('First_name');
          $table->string('Last_name');
          $table->string('card_number');
          $table->string('expiry_date');
          $table->string('Csv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Customer_payment', function (Blueprint $table) {
          Schema::drop('Customer_payment');
        });
    }
}
