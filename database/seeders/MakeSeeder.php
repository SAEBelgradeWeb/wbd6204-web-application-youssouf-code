<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Make::factory(10)->create();

    }
}
