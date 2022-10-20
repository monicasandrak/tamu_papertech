<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->increments('id_tamu');
            $table->dateTime('tanggal');
            $table->string('nama');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('keperluan');
            $table->string('bertemu_dengan');
            $table->integer('no_ktp' ,16);
            $table->string('foto_ktp');
            $table->string('no_kendaraan');
            $table->time('jam_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('m_tamus');
    }
};
