<?php

namespace Database\Factories;

use App\Models\Votante;
use Illuminate\Database\Eloquent\Factories\Factory;

class VotanteFactory extends Factory
{
    protected $model = Votante::class;

    public function definition(): array
    {
        return [
            'documento' => $this->faker->randomNumber(8),
            'nombre' => $this->faker->name,
            'mesa' => $this->faker->numberBetween(1, 10),
            'id_candidato_seleccionado' => $this->faker->numberBetween(1, 5),
        ];
    }
}

