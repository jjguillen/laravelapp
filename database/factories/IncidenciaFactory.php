<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Incidencia;

class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {
        Incidencia::factory()
        ->count(50)
        ->hasPosts(1)
        ->create();
    }
}
