<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'vehicle_id' => $this->faker->numberBetween(1, 3),
            'make_id' => $this->faker->numberBetween(1, 5),
            'type_id' => $this->faker->numberBetween(1, 10),
            'shape_id' => $this->faker->numberBetween(1, 10),
            'fuel_id' => $this->faker->numberBetween(1, 10),
            'region_id' => $this->faker->numberBetween(1, 10),
            'transmission_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(3, true),
            'description' => $this->faker->paragraph(3, true),
            'power' => $this->faker->numberBetween(1, 2000),
            'price' => $this->faker->numberBetween(1, 2000000),
            'year' => $this->faker->year($max = 'now'),
            'mileage' => $this->faker->numberBetween(1, 900000),

            'feature_id' => $this->faker->numberBetween(1, 10),





        ];
    }
}
