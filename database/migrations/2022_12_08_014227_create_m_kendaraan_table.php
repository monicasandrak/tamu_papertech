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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id_pengendara');
            $table->string('nama_pengendara');
            $table->string('posisi');
            $table->string('departement');
            $table->string('no_kendaraan');
            $table->string('tanggal_pajak');
            $table->string('status_pajak');
            $table->string('status_sim');
            $table->string('status_akhir');
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
        Schema::dropIfExists('m_kendaraan');
    }
};
