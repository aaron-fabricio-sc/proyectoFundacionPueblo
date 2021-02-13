<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria1 = new Categoria();
        $categoria1->nombre = 'Comida';

        $categoria1->save();

        $categoria2 = new Categoria();
        $categoria2->nombre = 'Textiles';

        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->nombre = 'Servicios';

        $categoria3->save();
    }
}
