<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
			'ID' => $this->faker->name,
			'nomevento' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
