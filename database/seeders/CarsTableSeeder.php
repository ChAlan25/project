<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        car::factory()->count(10)->create();
    }
}
