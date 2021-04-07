<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FeaturePost::factory(10)->create();

    }
}
