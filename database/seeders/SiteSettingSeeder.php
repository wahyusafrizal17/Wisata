<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'home' => [
                'cta_title' => 'Siap Berangkat?',
                'cta_subtitle' => 'Hubungi kami sekarang untuk booking cepat dan mudah.',
                'cta_button_text' => 'Booking Sekarang',
            ],
            'pricelist' => [
                'badge' => 'Pricelist',
                'title' => 'Armada Mobil Kami',
                'subtitle' => 'Pilih mobil yang sesuai kebutuhan perjalanan Anda. Semua harga include sopir profesional.',
            ],
            'tour-packages' => [
                'badge' => 'Paket Wisata',
                'title' => 'Pilih Paket Favorit Anda',
                'subtitle' => 'Temukan paket terbaik untuk liburan yang nyaman, aman, dan berkesan.',
            ],
            'drop-off' => [
                'badge' => 'Drop Off Bandara',
                'title' => 'Drop Off Bandara',
                'subtitle' => 'Layanan antar jemput bandara yang aman, nyaman, dan tepat waktu',
                'intro_text' => 'SMJ Rent menyediakan layanan antar jemput bandara untuk perjalanan bisnis maupun liburan Anda. Kami menjamin ketepatan waktu, kenyamanan perjalanan, dan layanan profesional dari driver berpengalaman.',
                'button_text' => 'Pesan Sekarang',
            ],
            'contact' => [
                'whatsapp' => '6281234567890',
                'email' => 'admin@smjrent.com',
                'address' => 'Alamat Anda di sini',
                'instagram' => 'https://instagram.com/',
                'linktree' => 'https://linktr.ee/',
                'maps_embed' => '',
            ],
        ];

        foreach ($defaults as $key => $value) {
            SiteSetting::query()->updateOrCreate(
                ['key' => $key],
                ['value' => json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)]
            );
        }
    }
}

