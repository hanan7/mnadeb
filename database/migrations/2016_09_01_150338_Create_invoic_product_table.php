<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoic_product', function (Blueprint $table) {

            $table->increments('id');
             $table->integer('invoic_id');
             $table->integer('product_id');
             $table->integer('quantitiy');
             $table->string('unit');
             $table->float('total');
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
        Schema::drop('invoic_product');
    }
}
