<?php

namespace Database\Factories;

use App\Models\Maba;
use Illuminate\Database\Eloquent\Factories\Factory;

use Str;

class MabaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maba::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'prodi' => $this->faker->name,
            'absen_hari_pertama' => $this->faker->name,
            'absen_hari_kedua' => $this->faker->name,
            'remember_token' => Str::random(10),
        ];
    }
}
