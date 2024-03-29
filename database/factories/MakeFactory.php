<?php

namespace Database\Factories;

use App\Models\Make;
use Illuminate\Database\Eloquent\Factories\Factory;

class MakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Make::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['Mercedes-Benz', 'Toyota ', 'Volkswagen ',
                'Porsche', 'BMW', 'Honda', 'Ford', 'Nissan', 'Lexus', 'Mini', 'McLaren', 'Subaru',
                'Volvo', 'Tesla', 'Skoda', 'LandRover', 'Ferrari', 'Dodge', 'GMC', 'Fiat',
                'Porsche', 'Maserati', 'Lamborghini', 'Jaguar', 'Nissan', 'Jeep']),
        ];
    }
}
