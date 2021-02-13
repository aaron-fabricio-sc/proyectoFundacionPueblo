<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PersonaSeeder::class);
        Curso::factory(50)->create();
        $this->call(AdminSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(CategoriaSeeder::class);
    }
}
