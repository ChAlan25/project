<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Supra mk4',
                'brand' => 'Toyota',
                'model' => '1994',
                'year' => 1994,
                'price' => 29999,
                'description' => 'Iconic Japanese sports car.',
                'image_path' => '/images/cars/supra_mk4.jpg',
            ],
            [
                'name' => 'Mustang',
                'brand' => 'Ford',
                'model' => '2022',
                'year' => 2022,
                'price' => 55999,
                'description' => 'Classic American muscle car.',
                'image_path' => '/images/cars/mustang.jpg',
            ],
            // Add more car records as needed
        ];

        // Insert the car records into the database
        foreach ($cars as $car) {
            \App\Models\Car::create($car);
        }
    }
}
