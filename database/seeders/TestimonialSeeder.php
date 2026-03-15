<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'message' => 'Pelayanan sangat memuaskan! Mobil bersih, driver profesional, dan tepat waktu. Sangat direkomendasikan untuk perjalanan wisata.',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&q=80',
                'order' => 1,
            ],
            [
                'name' => 'Siti Rahmawati',
                'message' => 'Paket Bromo yang kami pesan sangat worth it. Semua sesuai ekspektasi. Terima kasih SMJ Rent!',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&q=80',
                'order' => 2,
            ],
            [
                'name' => 'Ahmad Wijaya',
                'message' => 'Sudah beberapa kali pakai untuk drop off bandara. Selalu on time dan mobil nyaman. Top!',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&h=150&fit=crop&q=80',
                'order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name'], 'message' => $testimonial['message']],
                $testimonial
            );
        }
    }
}
