<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyMainteTecn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_maintenance', function (Blueprint $table) {
            $table->bigInteger('id_tecn')->unsigned()->after('status');
            $table->foreign('id_tecn')->references('id')->on('_technical');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_maintenance', function (Blueprint $table) {
            $table->dropColumn('id_tecn'); 
        });
    }
}
