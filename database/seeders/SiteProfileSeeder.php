<?php

namespace Database\Seeders;

use App\Models\SiteProfile;
use Illuminate\Database\Seeder;

class SiteProfileSeeder extends Seeder
{
    public function run(): void
    {
        SiteProfile::query()->updateOrCreate(
            ['id' => 1],
            [
                'description' => 'SMJ Rent adalah layanan rental mobil dan wisata yang mengutamakan kenyamanan, keamanan, dan ketepatan waktu. Kami siap menemani perjalanan keluarga, bisnis, hingga liburan Anda.',
                'photo' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1200&q=80',
            ]
        );
    }
}

