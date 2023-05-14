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
            $table->id('id',11);
            $table->string('orderref',100);
            $table->bigInteger('receiptref')->nullable();
            $table->bigInteger('customer')->nullable();
            $table->date('orderdate')->nullable();
            $table->string('salesman',100);
            $table->string('total',100);
            $table->string('status',100);
            $table->string('sessionid',100);
            $table->string('discount',100);
            $table->string('amountgiven',100);
            $table->string('change',100);
            $table->date('time_check')->nullable();
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
};
