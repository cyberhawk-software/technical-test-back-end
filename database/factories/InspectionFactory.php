<?php

namespace Database\Factories;

use App\Models\Inspection;
use App\Models\Turbine;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inspected_at' => Carbon::now(),
            'turbine_id' => Turbine::factory(),
        ];
    }
}
