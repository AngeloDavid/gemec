<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEquipColla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_equipment', function (Blueprint $table) {
            $table->bigInteger('id_colla')->unsigned()->after('status');
            $table->foreign('id_colla')->references('id')->on('_collaborator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_equipment', function (Blueprint $table) {
            $table->dropColumn('id_colla');            
        });
    }
}
