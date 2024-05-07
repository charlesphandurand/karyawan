<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->decimal('sisa_gaji', 10, 2)->nullable()->change();
            // Tambahkan kolom lama_kerja dan buat nullable
            $table->decimal('lama_kerja', 10, 2)->nullable()->change();

            $table->integer('nama_jabatan')->after('nama_karyawan')->nullable();
            $table->integer('standart')->after('nama_jabatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->decimal('sisa_gaji', 8, 2)->change();
            // Ubah kembali kolom lama_kerja ke tipe data semula
            $table->decimal('lama_kerja', 8, 2)->change();


            $table->dropColumn('nama_jabatan');
            $table->dropColumn('standart');
        });
    }
}
