<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('invoics', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id');
            $table->string('state');
            $table->integer('code');
            $table->integer('product_count');
            $table->float('total');
            $table->float('sub_total');
            $table->string('payment_method');
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
        Schema::drop('invoics');
    }
}
