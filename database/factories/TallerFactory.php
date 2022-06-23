<?php

namespace Database\Factories;

use App\Models\Taller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TallerFactory extends Factory
{
    protected $model = Taller::class;

    public function definition()
    {
        return [
			'nomtaller' => $this->faker->name,
			'sede' => $this->faker->name,
			'cupo' => $this->faker->name,
        ];
    }
}
