<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'codigo'=>$faker->numerify('##-####')->unique(),
            'nombre_cliente'=>$faker->firstName.$faker->lastName,
            'nombre_empleado'=>$faker->firstName.$faker->lastName,
            'pruducto'=>$faker->Name,
            'fecha'=>$faker->date,
            'formaDePago'=>$faker->text
        ];
    }
}
