<?php

namespace Database\Factories;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     return [
            'titulo' => $this->faker->Word(),
            'descripcion' => $this->faker->word(),
            'estado'=> $this->faker->randomElement([1,2])
        ];

    }
}
