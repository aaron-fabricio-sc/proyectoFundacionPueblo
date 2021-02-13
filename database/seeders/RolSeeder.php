<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = new Rol();

        $rol1->nombre_rol = 'Admin';


        $rol1->save();

        $rol2 = new Rol();

        $rol2->nombre_rol = 'Dirección';


        $rol2->save();
        $rol3 = new Rol();

        $rol3->nombre_rol = 'Secretariado o administración';

        $rol3->save();
        $rol4 = new Rol();

        $rol4->nombre_rol = 'Profesores';


        $rol4->save();

        $rol5 = new Rol();

        $rol5->nombre_rol = 'Estudiantes';


        $rol5->save();
    }
}
