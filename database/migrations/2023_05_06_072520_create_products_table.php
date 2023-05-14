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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id',11);
            $table->string('name',100);
            $table->bigInteger('onhand')->nullable();
            $table->bigInteger('cost')->nullable();
            $table->string('sale_price',100);
            $table->string('scale',100);
            $table->string('barcode',100);
            $table->string('type',100);
            $table->string('category',100);
            $table->string('notes',100);
            $table->string('reference',100);
            $table->string('sales',100);
            $table->string('purchase',100);
            $table->string('invoicing',100);
            $table->string('inventory',100);
            $table->string('status',100);
            $table->dateTime('time_check')->nullable();
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
        Schema::dropIfExists('products');
    }
};
