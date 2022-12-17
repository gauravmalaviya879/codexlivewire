<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameGroupToTempgroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('tempgroup', function (Blueprint $table) {
        //     //
        // });
        // rename tabel command
        // Schema::rename('group','tempgroup');
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('tempgroup', function (Blueprint $table) {
        //     //
        // });
        // Schema::rename('tempgroup','group');
        // Schema::table('student', function (Blueprint $table) {
        //     //
        //     $table->dropColumn(['city','name']); 
        // });
    }
}
