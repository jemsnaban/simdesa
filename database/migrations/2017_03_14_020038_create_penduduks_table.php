<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('no_kk');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('rt');
            $table->integer('rw')->nullable();
            $table->integer('dusun')->nullable();
            $table->integer('agama');
            $table->integer('pendidikan');
            $table->integer('pekerjaan')->nullable();
            $table->integer('status_kawin');
            $table->integer('hubungan');
            $table->string('gol_darah')->nullable();
            $table->integer('kewarganegaraan');
            $table->integer('ayah');
            $table->integer('ibu');
            $table->string('alamat_sblm')->nullable();
            $table->string('alamat_skrg');
            $table->string('akta_nikah')->nullable();
            $table->date('tanggal_nikah')->nullable();
            $table->string('akta_cerai')->nullable();
            $table->date('tanggal_cerai')->nullable();
            $table->integer('cacat');
            $table->integer('cara_kb')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
}
