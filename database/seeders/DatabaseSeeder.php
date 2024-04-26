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
            'sisa_gaji' => '300',
        ]);
    }
}
