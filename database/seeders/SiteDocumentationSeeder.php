<?php

namespace Database\Seeders;

use App\Models\SiteDocumentation;
use Illuminate\Database\Seeder;

class SiteDocumentationSeeder extends Seeder
{
    public function run(): void
    {
        SiteDocumentation::query()->updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Dokumentasi Perjalanan',
                'subtitle' => 'Lihat momen terbaik perjalanan bersama SMJ Rent.',
                'instagram_url' => 'https://instagram.com/',
            ]
        );
    }
}

