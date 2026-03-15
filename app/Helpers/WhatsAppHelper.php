<?php

namespace App\Helpers;

class WhatsAppHelper
{
    public static function bookingUrl(string $type, string $itemName, ?string $date = null): string
    {
        $number = config('smj.whatsapp');
        $message = "Halo SMJ Rent, saya ingin booking:\n\n";
        $message .= "Nama: [Isi nama Anda]\n";
        $message .= "Tanggal: " . ($date ?? '[Pilih tanggal]') . "\n";
        $message .= "Paket/Mobil: {$itemName}\n";

        return 'https://wa.me/' . preg_replace('/[^0-9]/', '', $number) . '?text=' . urlencode($message);
    }
}
