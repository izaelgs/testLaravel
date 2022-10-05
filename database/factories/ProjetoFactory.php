<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Projeto::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->text(15),
            'descricao' => $this->faker->text(50),
        ];
    }
}
