<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            BannerSeeder::class,
            SiteProfileSeeder::class,
            SiteDocumentationSeeder::class,
            SiteSettingSeeder::class,
            CarSeeder::class,
            TourPackageSeeder::class,
            GallerySeeder::class,
            TestimonialSeeder::class,
            DropOffItemSeeder::class,
        ]);
    }
}
