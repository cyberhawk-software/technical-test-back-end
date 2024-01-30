<?php

namespace Database\Factories;

use App\Models\Farm;
use App\Models\Turbine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Turbine>
 */
class TurbineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'farm_id' => Farm::factory(),
            'lat_number' => $this->faker->randomFloat(4, -90, 90),
            'lng_number' => $this->faker->randomFloat(4, -180, 180),
        ];
    }
}
