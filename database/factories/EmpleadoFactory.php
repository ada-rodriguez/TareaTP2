<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Model\empleado;
use Faker\Generator as Faker;

class EmpleadoFactory extends Factory{

    //protected $model = empleado::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
           
            'identidad'=>$this->faker->numerify('####-').
                    $this->faker->numberBetween(1957, 2005).
                    $this->faker->numerify('-#####'),
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'edad'=>$this->faker->numberBetween(18, 65),
            'genero'=>$this->faker->text()
            
            //
        ];
    }
};
