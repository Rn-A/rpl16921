<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelajarans', function (Blueprint $table) {
            $table->id('id_pembelajaran');
            $table->unsignedBigInteger('id_guru');
            $table->unsignedBigInteger('id_mapel');
            $table->string('hari');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_guru')->references('id_guru')->on('gurus');
            $table->foreign('id_mapel')->references('id_mapel')->on('mata_pelajarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelajarans');
    }
}
