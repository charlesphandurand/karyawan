<?php

namespace Database\Factories;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Factories\Factory;

class GajiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gaji::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jabatan' => $this->faker->word,
        'standar_gaji' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
