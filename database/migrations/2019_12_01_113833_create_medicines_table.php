<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine_name');
            $table->string('generic_name');
            $table->unsignedBigInteger('medicine_type_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->string('strength');
            $table->unsignedBigInteger('unit');
            $table->unsignedBigInteger('unit_price');
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
        Schema::dropIfExists('medicines');
    }
}
