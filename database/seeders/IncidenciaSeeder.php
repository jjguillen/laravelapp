<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Incidencia;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //Crear objetos con la fachada DB
        $faker = Faker::create();
        DB::table('incidencias')->insert([
            'latitud' => $faker->latitude,
            'longitud' => $faker->longitude,
            'ciudad' => $faker->city,
            'direccion' => $faker->streetAddress,
            'etiqueta' => Str::random(3),
            'descripcion' => $faker->text($maxNbChars = 200),
            'estado' => 'abierta'
            ]);
        */

        //Crear objetos con IncidenciaFactory
        Incidencia::factory()->count(500)->create();
        
    }
}
