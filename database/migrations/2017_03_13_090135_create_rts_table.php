<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rt_dusun_id');
            $table->integer('rt_rw_id');
            $table->string('rt_nama');
            $table->integer('rt_ketua_id');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('rt_ketua_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rts');
    }
}
