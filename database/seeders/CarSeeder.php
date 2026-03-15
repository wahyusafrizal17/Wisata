<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Toyota Avanza',
                'image' => 'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=800&q=80',
                'price' => 450000,
                'capacity' => 7,
                'description' => 'Mobil keluarga dengan kapasitas 7 penumpang. Nyaman untuk perjalanan jarak dekat maupun jauh.',
            ],
            [
                'name' => 'Toyota Innova Reborn',
                'image' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=800&q=80',
                'price' => 650000,
                'capacity' => 7,
                'description' => 'MPV premium dengan interior luas dan fitur lengkap. Ideal untuk perjalanan keluarga.',
            ],
            [
                'name' => 'Toyota Hiace',
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&q=80',
                'price' => 850000,
                'capacity' => 14,
                'description' => 'Minibus untuk grup besar. Cocok untuk wisata rombongan atau perjalanan dinas.',
            ],
        ];

        foreach ($cars as $car) {
            Car::updateOrCreate(
                ['name' => $car['name']],
                $car
            );
        }
    }
}
