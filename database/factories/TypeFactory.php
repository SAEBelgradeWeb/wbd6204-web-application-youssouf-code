<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Type::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['A1', 'A2', 'A4', 'A7',
                'X1', 'X2', 'X3', 'X4', 'X5', 'Golf 5', 'Golf 6', 'Golf 7',]),

            'make_id' => $this->faker->numberBetween(1, 10)

        ];
    }
}
