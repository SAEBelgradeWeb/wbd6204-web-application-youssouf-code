<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create(['vehicle'=> 'car']);
        Vehicle::create(['vehicle'=> 'truck']);
        Vehicle::create(['vehicle'=> 'motorbike']);
    }
}
