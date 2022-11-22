<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'codigo'=>$faker->numerify('####-###')->unique(),
            'nombre'=>$faker->Name(),
            'precio'=>$faker->number(),
            'inventario'=>$faker->number(),
            'descripcion'=>$faker->text()
        ];
    }
}
