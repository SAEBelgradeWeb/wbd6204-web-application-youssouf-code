<?php

namespace Database\Factories;

use App\Models\ShapeType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShapeTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShapeType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shape_id' => $this->faker->numberBetween(1, 10),
            'type_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
