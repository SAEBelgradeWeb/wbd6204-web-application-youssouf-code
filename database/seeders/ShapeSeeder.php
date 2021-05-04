<?php

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Seeder;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        \App\Models\Shape::factory(10)->create();*/
        Shape::create(['shape'=> 'super_car']);
        Shape::create(['shape'=> 'Roadster']);
        Shape::create(['shape'=> 'Convertible']);
        Shape::create(['shape'=> 'Sedan']);
        Shape::create(['shape'=> 'Hatchback']);
        Shape::create(['shape'=> 'SUV']);
        Shape::create(['shape'=> 'Passenger VAN']);
        Shape::create(['shape'=> 'Coupe']);
        Shape::create(['shape'=> 'VAN']);
        Shape::create(['shape'=> 'Pick Up Truck']);

    }
}
