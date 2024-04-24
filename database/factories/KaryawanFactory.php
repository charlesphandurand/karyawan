<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Karyawan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_karyawan' => $this->faker->word,
        'nomor_rekening' => $this->faker->word,
        'mulai_kerja' => $this->faker->word,
        'lama_kerja' => $this->faker->word,
        'masa_kerja_gaji' => $this->faker->word,
        'prestasi_gaji' => $this->faker->word,
        'uang_makan' => $this->faker->word,
        'uang_transport' => $this->faker->word,
        'pengembalian' => $this->faker->word,
        'tunai_gaji' => $this->faker->word,
        'sisa_gaji' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
