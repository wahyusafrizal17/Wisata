<?php

namespace Database\Seeders;

use App\Models\DropOffItem;
use Illuminate\Database\Seeder;

class DropOffItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Drop Off Bandara (Dalam Kota)',
                'image' => 'https://images.unsplash.com/photo-1505832018823-50331d70d237?w=800&q=80',
                'price' => 150000,
                'description' => 'Antar bandara untuk area dalam kota. Nyaman, aman, dan tepat waktu.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Drop Off Bandara (Luar Kota)',
                'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800&q=80',
                'price' => 250000,
                'description' => 'Antar bandara untuk rute luar kota dengan driver berpengalaman.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Pickup Bandara',
                'image' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800&q=80',
                'price' => 200000,
                'description' => 'Penjemputan bandara sesuai jadwal kedatangan Anda.',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            DropOffItem::query()->updateOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}

