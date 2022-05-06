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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('subtotal');
            $table->integer('ship_fee');
            $table->integer('total');
            $table->integer('qty_all');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('addr');
            $table->integer('payment');
            $table->integer('ship_method');
            $table->string('ship_store');
            $table->integer('status');
            $table->string('ps');
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
};
