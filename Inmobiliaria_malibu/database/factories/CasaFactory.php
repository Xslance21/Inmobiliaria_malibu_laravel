<?php

namespace Database\Factories;

use App\Models\Casa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CasaFactory extends Factory
{
    protected $model = Casa::class;

    public function definition()
    {
        return [
			'measures' => $this->faker->name,
			'desing' => $this->faker->name,
			'price' => $this->faker->name,
			'adress' => $this->faker->name,
        ];
    }
}
