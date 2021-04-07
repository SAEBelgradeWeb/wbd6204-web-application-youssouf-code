<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ShapeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ShapeType::factory(10)->create();

    }
}
