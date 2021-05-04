<?php

namespace Database\Seeders;

use App\Models\Make;
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
/*        \App\Models\Make::factory(10)->create();*/

        Make::create(['make'=> 'Audi']);
        Make::create(['make'=> 'BMW']);
        Make::create(['make'=> 'volkswagen']);
        Make::create(['make'=> 'Mercedes']);
        Make::create(['make'=> 'Tesla']);
    }
}
