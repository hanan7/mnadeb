<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('code');
            $table->string('slug');
            $table->integer('stock');
            $table->integer('solid');
            $table->integer('price');
            $table->integer('active');
            $table->integer('cat_id');
            $table->integer('sub_cat_id');
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
       Schema::drop('products');
    }
}
