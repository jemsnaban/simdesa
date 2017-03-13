<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rw_dusun_id');
            $table->string('rw_nama');
            $table->integer('rw_ketua_id');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('rw_ketua_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rws');
    }
}
