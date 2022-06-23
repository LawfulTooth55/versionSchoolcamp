<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = User::class;
    public function definition()
    {
        return [
            'name' => $this->faker->text,
            'email' => $this->faker->email,
            'password'=> $this->faker->randomElement(['']),
        ];
    }
}
