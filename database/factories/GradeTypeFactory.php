<?php

namespace Database\Factories;

use App\Models\GradeType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GradeType>
 */
class GradeTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name' => random_int(1, 5)
        ];
    }
}
