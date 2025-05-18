<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name' => 'E30 M3',
                'brand' => 'BMW',
                'model' => 'E30 M3',
                'year' => 1990, // Approximate year for E30 M3, adjust if you know the exact year
                'price' => 65000, // Example value, adjust as needed
                'description' => 'Classic BMW E30 M3, red coupe with yellow headlights, iconic design.',
                'image_path' => 'https://images.unsplash.com/photo-1682695795557-17447f921a91', // Replace with the actual URL if you host the image
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'Maverick X3',
                'brand' => 'Can-Am',
                'model' => 'Maverick X3',
                'year' => 2022,
                'price' => 32000,
                'description' => 'Can-Am Maverick X3, high performance off-road buggy, black and red.',
                'image_path' => 'https://your-image-host.com/path/to/canam-maverick-x3.jpg', // Replace with actual image URL if available
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'G80 M3',
                'brand' => 'BMW',
                'model' => 'M3 G80',
                'year' => 2023,
                'price' => 90000,
                'description' => 'BMW G80 M3, blue sports sedan with aggressive styling and quad exhaust.',
                'image_path' => 'https://your-image-host.com/path/to/bmw-g80-m3.jpg', // Replace with actual image URL if available
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'Mustang GT',
                'brand' => 'Ford',
                'model' => 'Mustang GT',
                'year' => 2018,
                'price' => 48000,
                'description' => 'Ford Mustang GT, red, with black spoiler and sequential LED taillights, modern American muscle.',
                'image_path' => 'https://your-image-host.com/path/to/ford-mustang-gt.jpg', // Replace with actual image URL if available
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'Mustang Custom',
                'brand' => 'Ford',
                'model' => 'Mustang Custom',
                'year' => 2017,
                'price' => 50000,
                'description' => 'White Ford Mustang with custom LED headlights and hood vents, aggressive modified front end, “Mafia Street” windshield banner.',
                'image_path' => 'https://your-image-host.com/path/to/white-mustang-custom.jpg', // Replace with actual image URL if available
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'Phantom Convertible',
                'brand' => 'Chevrolet',
                'model' => 'Camaro Convertible Phantom',
                'year' => 2021,
                'price' => 65000,
                'description' => 'Striking Chevrolet Camaro convertible with an iridescent wrap, large rear spoiler, and "PHANTOM" badging. Parked near the coast at sunset with a vivid sky and ocean view.',
                'image_path' => 'https://your-image-host.com/path/to/phantom-camaro-convertible.jpg',
                'quantity' => 1,
                'deleted_at' => null,
                'created_at' => now(),
            ]
        ];
    }
}
