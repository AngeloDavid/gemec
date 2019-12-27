<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyMainteEquip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_maintenance', function (Blueprint $table) {
            $table->bigInteger('id_equi')->unsigned()->after('status');
            $table->foreign('id_equi')->references('id')->on('_equipment');
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
            $table->dropColumn('id_equi'); 
        });
    }
}
