<?php

namespace Database\Seeders;

use App\Models\TourPackage;
use Illuminate\Database\Seeder;

class TourPackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'title' => 'Wisata Bromo 2 Hari 1 Malam',
                'slug' => 'wisata-bromo-2-hari-1-malam',
                'category' => 'lokal',
                'price' => 1500000,
                'duration' => '2 Hari 1 Malam',
                'description' => 'Jelajahi keindahan Bromo dengan paket lengkap. Nikmati sunrise di Penanjakan dan petualangan di lautan pasir.',
                'itinerary' => "Hari 1: Pick up - Perjalanan ke Bromo - Check in hotel\nHari 2: Sunrise Penanjakan - Kawah Bromo - Sarapan - Check out - Drop off",
                'facilities' => ['Transportasi', 'Hotel', 'Tiket masuk', 'Makan 2x', 'Driver guide'],
                'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80',
            ],
            [
                'title' => 'Tour Bali 4 Hari 3 Malam',
                'slug' => 'tour-bali-4-hari-3-malam',
                'category' => 'lokal',
                'price' => 3500000,
                'duration' => '4 Hari 3 Malam',
                'description' => 'Paket lengkap mengunjungi destinasi populer Bali. Ubud, Tanah Lot, Uluwatu dan pantai-pantai indah.',
                'itinerary' => "Hari 1: Airport - Ubud\nHari 2: Tanah Lot - Bedugul\nHari 3: Uluwatu - GWK\nHari 4: Free time - Airport",
                'facilities' => ['Transportasi', 'Hotel 3 malam', 'Tiket objek wisata', 'Makan', 'Driver guide'],
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800&q=80',
            ],
            [
                'title' => 'Singapore 3 Hari 2 Malam',
                'slug' => 'singapore-3-hari-2-malam',
                'category' => 'internasional',
                'price' => 8500000,
                'duration' => '3 Hari 2 Malam',
                'description' => 'Explore Singapore dengan paket hemat. Marina Bay Sands, Sentosa, Universal Studios dan shopping.',
                'itinerary' => "Hari 1: Changi - Marina Bay - Gardens by the Bay\nHari 2: Sentosa - Universal Studios\nHari 3: Orchard Road - Changi",
                'facilities' => ['Tiket pesawat', 'Hotel', 'Transportasi', 'Tiket atraksi', 'Tour guide'],
                'image' => 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=800&q=80',
            ],
        ];

        foreach ($packages as $package) {
            TourPackage::updateOrCreate(
                ['slug' => $package['slug']],
                $package
            );
        }
    }
}
