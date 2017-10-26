<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CartItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cart_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_id');
            $table->string('product_name');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->double('amount');
            $table->string('imagePath');
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
        Schema::drop('cart_items');
    }
}
