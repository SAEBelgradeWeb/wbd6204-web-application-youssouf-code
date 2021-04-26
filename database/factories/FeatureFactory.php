<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature' => $this->faker->randomElement(['A/C: Front', 'A/C: Rear', 'Backup Camera',
                'Cruise Control', 'A/C: Front', 'A/C: Rear', 'Backup Camera', 'Cruise Control',
                'Power Steering', 'Hands-Free', 'Heated Seats', 'Keyless-Entry',
                'Sunroof', 'Airbag: Driver', 'Airbag: Passenger', 'Fog Lights', 'Third Row Seats',
                'Navigation'])

//            randomElements($array = array ('a','b','c'), $count = 1) // array('c')



        ];
    }
}
