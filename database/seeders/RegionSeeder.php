<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        \App\Models\Region::factory(10)->create();*/

        Region::create(['region'=> 'Belgrade']);
        Region::create(['region'=> 'Novi sad ']);
        Region::create(['region'=> 'Novi pazar']);
        Region::create(['region'=> 'Sombor']);
        Region::create(['region'=> 'Valjevo']);
        Region::create(['region'=> 'Sombor']);
        Region::create(['region'=> 'Pirot']);
        Region::create(['region'=> 'Niš']);
        Region::create(['region'=> 'Subotica']);
        Region::create(['region'=> 'Pirot']);

    }
}
