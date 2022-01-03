<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) { //PS: Schema Builder Lesson
            $table->increments('id');
            $table->string('customerEmail');
            $table->string('customerName');
            $table->string('customerAddress');
            $table->string('customerIG');
            $table->string('customerNo');
            $table->string('MOD');
            $table->string('MOP');
            $table->string('productPurchased');
            
        //STUDY FIRST HOW TO AUTOMATIC ADD AND DISPLAY PRICES
            // $table->integer('price');    
            // $table->integer('totalPrice');
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
        Schema::dropIfExists('orders');
    }
}
