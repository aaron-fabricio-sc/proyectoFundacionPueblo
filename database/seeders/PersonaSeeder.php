<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Persona();
        $persona->nombre = 'dante';
        $persona->primer_ap = 'santa';
        $persona->segundo_ap = 'valdez';
        $persona->ci = 9929114;
        $persona->fecha_nacimiento = ' 11 / 05 / 1997';
        $persona->telefono = 70668135;
        $persona->genero = ' masculino';
        $persona->email = ' dsadsa@asdsad.com';
        $persona->direccion = ' dsadsasadddsadsadcom';




        $persona->save();
    }
}
