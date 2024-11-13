<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPUnit\Framework\callback;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsersAndRolesSeeder::class);
        $this->call(EstadoIncidenciasSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(PrioridadIncidenciasSeeder::class);
        $this->call(CategoriaIncidenciasSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);




    }
}
