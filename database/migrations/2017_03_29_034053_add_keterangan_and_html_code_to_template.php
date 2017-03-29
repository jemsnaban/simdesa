<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeteranganAndHtmlCodeToTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_templates', function (Blueprint $table) {
            $table->string('keterangan')->nullable();
            $table->text('html_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_templates', function (Blueprint $table) {
            $table->dropColumn('keterangan');
            $table->dropColumn('html_code');
        });
    }
}
