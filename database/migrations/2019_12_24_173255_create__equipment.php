<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca',100);
            $table->string('serie',100);
            $table->string('description',100);
            $table->string('technical_data',100);
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
        Schema::dropIfExists('_equipment');
    }
}
