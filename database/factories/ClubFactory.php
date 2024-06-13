<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    public function definition()
    {
        return [
            'nama' => $this->faker->company,
            'kota' => $this->faker->city,
            'negara' => $this->faker->country,
            'tahun_berdiri' => $this->faker->year(),
            'stadion' => $this->faker->streetName,
            'pelatih' => $this->faker->name,
        ];
    }
}