<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Gaji::factory(10)->create([
            'standar_gaji' => '50000',
            'jabatan' => 'Supervisor',
        ]);
        \App\Models\Karyawan::factory(50)->create([
            'nama_karyawan' => 'TAUFAN TRI MARTONO',
            'nomor_rekening' => '0310006406998',
            'mulai_kerja' => '2007-11-01',
            'lama_kerja' => '16',
            'masa_kerja_gaji' => '50000',
            'prestasi_gaji' => '10000',
            'uang_makan' => '5000',
            'uang_transport' => '5000',
            'pengembalian' => '300',
            'tunai_gaji' => '300',
        ])->each(function ($karyawan) {
            // Hitung nilai sisa gaji
            $sisa_gaji = $karyawan->uang_makan + $karyawan->uang_transport - $karyawan->pengembalian - $karyawan->tunai_gaji;

            // Set nilai sisa gaji ke dalam entri karyawan
            $karyawan->sisa_gaji = $sisa_gaji;

            // Simpan entri karyawan ke dalam database
            $karyawan->save();
        });
    }
}
