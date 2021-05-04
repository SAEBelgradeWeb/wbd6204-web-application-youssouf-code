<?php

namespace Database\Seeders;

use App\Models\Shape;
use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['type'=> 'A1']);
        Type::create(['type'=> 'A2']);
        Type::create(['type'=> 'A4']);
        Type::create(['type'=> 'A7']);
        Type::create(['type'=> 'X1']);
        Type::create(['type'=> 'X3']);
        Type::create(['type'=> 'X5']);
        Type::create(['type'=> 'Golf 5']);
        Type::create(['type'=> 'Golf 6']);
        Type::create(['type'=> 'Golf 7']);
        Type::create(['type'=> 'Model S']);
        Type::create(['type'=> 'Model 3']);
        Type::create(['type'=> 'Model X']);
        Type::create(['type'=> 'Model Y']);
        Type::create(['type'=> 'A-Class']);
        Type::create(['type'=> 'C-Class']);
        Type::create(['type'=> 'E-Class']);
        Type::create(['type'=> 'G-Class']);
    }
}
