<?php

namespace Database\Factories;

use App\Models\Shape;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShapeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shape::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        /*    'shape' => $this->faker->randomElement(['super_car', 'Convertible', 'Pick Up Truck', 'Sedan',
                'Hatchback', 'SUV', 'Coupe', 'VAN', 'Passenger VAN', 'Roadster',]),*/

        ];
    }
}
