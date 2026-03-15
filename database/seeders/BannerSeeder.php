<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Perjalanan Nyaman Bersama SMJ Rent',
                'subtitle' => 'Rental mobil premium dengan layanan terbaik untuk perjalanan Anda',
                'image' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=1920&q=80',
                'order' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::updateOrCreate(
                ['title' => $banner['title']],
                $banner
            );
        }
    }
}
