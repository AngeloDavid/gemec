<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMacToEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_equipment', function (Blueprint $table) {
            $table->string('codaaf',50)->nullable();
            $table->string('mac',30)->nullable();
            $table->string('ip',20)->nullable();
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
            $table->dropColumn('codaaf');
            $table->dropColumn('mac');
            $table->dropColumn('ip');
        });
    }
}
