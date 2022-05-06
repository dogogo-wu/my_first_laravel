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
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('subtotal')->nullable()->change();
            $table->integer('ship_fee')->nullable()->change();
            $table->integer('total')->nullable()->change();
            $table->integer('qty_all')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('addr')->nullable()->change();
            $table->integer('payment')->nullable()->change();
            $table->integer('ship_method')->nullable()->change();
            $table->string('ship_store')->nullable()->change();
            $table->integer('status')->nullable()->change();
            $table->string('ps')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
