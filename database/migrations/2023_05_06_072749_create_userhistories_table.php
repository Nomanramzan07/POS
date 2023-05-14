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
        Schema::create('userhistories', function (Blueprint $table) {
            $table->id('id',11);
            $table->string('username',100);
            $table->bigInteger('status')->nullable();
            $table->string('eventtype',100);
            $table->string('category',100);
            $table->string('notes',100);
            $table->date('event_time')->nullable();
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
        Schema::dropIfExists('userhistories');
    }
};
