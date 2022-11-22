<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado::factory(5000)->create();
        //factory( class: App\User::class, amount: 1000)->create();
        // \App\Models\empleado::factory(1000)->create();
    }
}
