<?php

namespace Tests\Feature;

use App\Models\Farm;
use App\Models\Turbine;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class FarmControllerTest extends TestCase
{
    public function testGetAllFarms(): void
    {
        $farms = Farm::factory(5)->create();

        $response = $this->getJson(route('farms.all'));

        $response->assertStatus(200);

        foreach ($farms as $farm) {
            $response->assertJsonFragment($farm->toArray());
        }
    }

    public function testShowFarm(): void
    {
        $farm = Farm::factory()->create();
        $deletedFarm = Farm::factory()->create();
        $deletedFarm->delete();

        // Assert 404 if no farm found
        $this->getJson(route('farms.show', ['farmID' => $deletedFarm->id]))->assertNotFound();

        $response = $this->getJson(route('farms.show', ['farmID' => $farm->id]));

        $response->assertStatus(200);

        $response->assertJson(fn(AssertableJson $json) =>
            $json->has('data', fn($json) =>
                $json->where('id', $farm->id)
                ->where('name', $farm->name)
                ->etc()
            )
        );
    }

    public function testGetTurbines(): void
    {
        $farm = Farm::factory()->create();
        $farm2 = Farm::factory()->create();

        $farmTurbines = Turbine::factory(2)->create([
            'farm_id' => $farm->id,
        ]);

        $farm2Turbines = Turbine::factory(2)->create([
            'farm_id' => $farm2->id,
        ]);

        $response = $this->getJson(route('farms.turbines.all', ['farmID' => $farm->id]));

        $response->assertOk();

        // Assert correct relations brought back
        foreach ($farmTurbines as $farmTurbine) {
            $response->assertJsonFragment($farmTurbine->toArray());
        }

        // Assert incorrect relations missing
        foreach ($farm2Turbines as $farm2Turbine) {
            $response->assertJsonMissing(['id' => $farm2Turbine->id]);
        }
    }

    public function testGetTurbine(): void
    {
        $farm = Farm::factory()->create();
        $farm2 = Farm::factory()->create();

        $farmTurbines = Turbine::factory(2)->create([
            'farm_id' => $farm->id,
        ]);

        $farm2Turbines = Turbine::factory(2)->create([
            'farm_id' => $farm2->id,
        ]);

        $response = $this->getJson(
            route('farms.turbines.get', [
                'farmID' => $farm->id,
                'turbineID' => $farm2Turbines->first()->id
            ])
        );

        // Assert empty data for turbine not related to farm
        $response->assertJson(['data' => []]);

        // Assert turbine is brought back
        $response = $this->getJson(
            route('farms.turbines.get', [
                'farmID' => $farm->id,
                'turbineID' => $farmTurbines->first()->id
            ])
        );

        $response->assertJsonFragment($farmTurbines->first()->toArray());
    }
}
