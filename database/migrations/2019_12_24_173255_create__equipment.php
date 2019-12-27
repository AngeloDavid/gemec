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
            $table->decimal('CPU', 8, 2);
            $table->decimal('RAM', 8, 2);
            $table->decimal('DISK', 8, 2);
            $table->string('ano',5);
            $table->string('color',50);
            $table->string('SO',50);
            $table->enum('status', ['OK','DESACTUALIZADO','EN_REPARACION','DAÑADO' ,'DEBAJA']);
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
