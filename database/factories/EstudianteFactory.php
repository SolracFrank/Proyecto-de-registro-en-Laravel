<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


 use App\Models\Estudiante;
 
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Estudiante::class;
    public function definition()
    {
        return [
            'ApellidoPaterno'=>$this->faker->lastName(),
            'ApellidoMaterno'=>$this->faker->lastName(),
            'Nombre'=>$this->faker->name(),
            'CURP'=>$this->faker->lexify('??????????????????'),
            //
            'Ciudad'=>$this->faker->city(),
            'Colonia'=>$this->faker->name(),
            'CodigoPostal'=>$this->faker->randomNumber(5, true),
            'Telefono'=>$this->faker->phoneNumber(),
            'TelefonoTutor'=>$this->faker->phoneNumber(),
            'Email'=>$this->faker->email(),
            'fEspecialidad'=>$this->faker->randomElement(['Informatica', 'Contabilidad', 'Electronica', 'AdminRH']),
            'sEspecialidad'=>$this->faker->randomElement(['Informatica', 'Contabilidad', 'Electronica', 'AdminRH']),
            'Promedio'=>$this->faker->randomFloat(2, 0, 100)

        ];
    }
}
