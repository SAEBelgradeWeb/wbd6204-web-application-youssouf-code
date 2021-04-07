<?php

namespace Database\Factories;

use App\Models\FeaturePost;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturePostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeaturePost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature_id' => $this->faker->numberBetween(1, 10),
            'post_id' => $this->faker->numberBetween(1, 10)

        ];
    }
}
