<?php

namespace App\Helpers;

class WhatsAppHelper
{
    /**
     * Nomor WhatsApp untuk semua tautan booking: isi field WhatsApp di Admin → Kontak,
     * fallback ke config smj.whatsapp (.env WHATSAPP_NUMBER).
     */
    public static function resolveWhatsAppDigits(): string
    {
        $contact = site_setting('contact', []);
        $wa = trim((string) ($contact['whatsapp'] ?? ''));

        if ($wa === '') {
            $wa = (string) config('smj.whatsapp');
        }

        return preg_replace('/[^0-9]/', '', $wa);
    }

    public static function bookingUrl(string $type, string $itemName, ?string $date = null): string
    {
        $number = self::resolveWhatsAppDigits();
        $message = "Halo SMJ Rent, saya ingin booking:\n\n";
        $message .= "Nama: [Isi nama Anda]\n";
        $message .= 'Tanggal: '.($date ?? '[Pilih tanggal]')."\n";
        $message .= "Paket/Mobil: {$itemName}\n";

        return 'https://wa.me/'.$number.'?text='.urlencode($message);
    }
}
