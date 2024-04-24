<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_karyawan');
            $table->string('nomor_rekening');
            $table->date('mulai_kerja');
            $table->double('lama_kerja');
            $table->double('masa_kerja_gaji');
            $table->double('prestasi_gaji');
            $table->double('uang_makan');
            $table->double('uang_transport');
            $table->double('pengembalian');
            $table->double('tunai_gaji');
            $table->double('sisa_gaji');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('karyawans');
    }
}
