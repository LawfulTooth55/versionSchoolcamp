<?php

namespace Database\Factories;

use App\Models\Registroalumno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RegistroalumnoFactory extends Factory
{
    protected $model = Registroalumno::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'taller_id' => $this->faker->name,
        ];
    }
}
