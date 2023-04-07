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
        Schema::create('kebersihan', function (Blueprint $table) {
            $table->bigIncrements('id_kebersihan');
            $table->string('nama_ruangan');
            $table->unsignedBigInteger('nama_petugas');
            $table->foreign('nama_petugas')->references('id_karyawan')->on('karyawan');
            $table->enum('status', ['Bersih','Kotor']);
            $table->string('foto');
            $table->date('tanggal_kebersihan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kebersihan');
    }
};
