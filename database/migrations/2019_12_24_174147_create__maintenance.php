<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_maintenance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->enum('type', ['PREVENTIVO','CORRECTIVO','INSTALACION','CONFIGURACION','DIAGNOSTICO']);
            $table->string('description',300);
            $table->enum('estado',['TERMINADO','EN PROCESO','POR_EMPEZAR']);
            $table->string('cause',100);
            $table->string('defect',100);
            $table->string('treatment',100);

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
        Schema::dropIfExists('_maintenance');
    }
}
