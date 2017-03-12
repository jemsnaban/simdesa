<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kk_no');
            $table->string('kk_nik_kepala');
            $table->string('kk_alamat');
            $table->integer('kk_id_cluster')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('kk_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluargas');
    }
}
