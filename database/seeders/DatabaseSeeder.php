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
            'nama_karyawan' => 'Admin',
            'nomor_rekening' => '1234567890',
            'mulai_kerja' => '2021-01-01',
            'lama_kerja' => '5',
            'masa_kerja_gaji' => '1',
            'prestasi_gaji' => '1',
            'uang_makan' => '1',
            'uang_transport' => '1',
            'pengembalian' => '1',
            'tunai_gaji' => '1',
            'sisa_gaji' => '1',
        ]);
    }
}
