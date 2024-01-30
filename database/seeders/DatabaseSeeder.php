<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Farm;
use App\Models\Grade;
use App\Models\Inspection;
use App\Models\Turbine;
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
        $farm = Farm::factory()->create();

        $turbines = Turbine::factory()->count(5)->create([
           'farm_id' => $farm
        ]);

        foreach ($turbines as $turbine) {

            // Set up components
            $components = Component::factory()->count(10)->create([
                'turbine_id' => $turbine
            ]);

            // Set up inspections
            $inspection = Inspection::factory()->create([
                'turbine_id' => $turbine
            ]);

            // Set up grades
            foreach ($components as $component) {
                Grade::factory()->create([
                    'component_id' => $component,
                    'inspection_id' => $inspection
                ]);
            }
        }
    }
}
