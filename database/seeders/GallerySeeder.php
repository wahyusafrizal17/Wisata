<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            ['image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&q=80', 'title' => 'Bromo Sunrise'],
            ['image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=600&q=80', 'title' => 'Pantai Bali'],
            ['image' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&q=80', 'title' => 'Perjalanan'],
            ['image' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=600&q=80', 'title' => 'Armada Kami'],
            ['image' => 'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=600&q=80', 'title' => 'Rental Mobil'],
            ['image' => 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=600&q=80', 'title' => 'Singapore Trip'],
        ];

        foreach ($images as $index => $item) {
            Gallery::updateOrCreate(
                ['image' => $item['image']],
                ['title' => $item['title']]
            );
        }
    }
}
