<?php

namespace Database\Factories;

use App\Models\ComponentType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ComponentType>
 */
class ComponentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
