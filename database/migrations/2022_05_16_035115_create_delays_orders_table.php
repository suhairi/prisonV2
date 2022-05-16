<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delays_orders', function (Blueprint $table) {
            $table->bigInteger('delay_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->integer('quantity');
            $table->foreign('delay_id')->references('id')->on('delays')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delays_orders');
    }
};
