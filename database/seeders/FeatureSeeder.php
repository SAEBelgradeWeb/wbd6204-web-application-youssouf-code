<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* \App\Models\Feature::factory(10)->create();*/
        Feature::create(['feature'=>'A/C: Front']);
        Feature::create(['feature'=>'A/C: Rear']);
        Feature::create(['feature'=>'Backup Camera']);
        Feature::create(['feature'=>'Cruise Control']);
        Feature::create(['feature'=>'Power Steering']);
        Feature::create(['feature'=>'Hands-Free']);
        Feature::create(['feature'=>'Heated Seats']);
        Feature::create(['feature'=>'Keyless-Entry']);
        Feature::create(['feature'=>'Sunroof']);
        Feature::create(['feature'=>'Airbag: Driver']);
        Feature::create(['feature'=>'Airbag: Passenger']);
        Feature::create(['feature'=>'Fog Lights']);
        Feature::create(['feature'=>'Third Row Seats']);
        Feature::create(['feature'=>'A/C: Front']);
        Feature::create(['feature'=>'Navigation']);
        Feature::create(['feature'=>'Panoramic roof']);


    }
}
