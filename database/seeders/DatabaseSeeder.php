<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Fuel;
use App\Models\Transmission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();



        $this->call(UserSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(MakeSeeder::class);
        $this->call(FuelSeeder::class);
        $this->call(TransmissionSeeder::class);
        $this->call(ShapeSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(PostSeeder::class);


         $this->call(FeaturePostSeeder::class);
         $this->call(ShapeTypeSeeder::class);






    }
}
