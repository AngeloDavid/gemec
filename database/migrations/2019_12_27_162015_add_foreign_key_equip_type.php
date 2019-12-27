<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEquipType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_equipment', function (Blueprint $table) {
            $table->bigInteger('id_type')->unsigned()->after('status');
            $table->foreign('id_type')->references('id')->on('_type_equ');
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
            $table->dropColumn('id_type');            
        });
    }
}
