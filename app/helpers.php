<?php

use App\Helpers\WhatsAppHelper;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('whatsapp_booking_url')) {
    function whatsapp_booking_url(string $type, string $itemName, ?string $date = null): string
    {
        return WhatsAppHelper::bookingUrl($type, $itemName, $date);
    }
}

if (! function_exists('image_url')) {
    function image_url(?string $path): ?string
    {
        if (empty($path)) {
            return null;
        }
        if (str_starts_with($path, 'http')) {
            return $path;
        }

        return asset($path);
    }
}

if (! function_exists('whatsapp_contact_href')) {
    /**
     * Build WhatsApp link from a phone-style value or full wa.me / api.whatsapp.com URL.
     */
    function whatsapp_contact_href(?string $whatsapp): string
    {
        $whatsapp = trim((string) $whatsapp);
        if ($whatsapp === '') {
            $digits = WhatsAppHelper::resolveWhatsAppDigits();

            return $digits !== '' ? 'https://wa.me/'.$digits : '#';
        }
        if (preg_match('#^https?://#i', $whatsapp)) {
            return $whatsapp;
        }
        $digits = preg_replace('/[^0-9]/', '', $whatsapp);

        return $digits !== '' ? 'https://wa.me/'.$digits : '#';
    }
}

if (! function_exists('whatsapp_display_number')) {
    /**
     * Human-readable phone digits for footer/UI (from number or wa.me URL).
     */
    function whatsapp_display_number(?string $whatsapp): string
    {
        $whatsapp = trim((string) $whatsapp);
        if ($whatsapp === '') {
            $digits = WhatsAppHelper::resolveWhatsAppDigits();
            if ($digits === '') {
                return '';
            }

            return str_starts_with($digits, '62') ? '+'.$digits : $digits;
        }
        $digits = preg_replace('/[^0-9]/', '', $whatsapp);
        if ($digits === '') {
            return '';
        }

        return str_starts_with($digits, '62') ? '+'.$digits : $digits;
    }
}

if (! function_exists('contact_instagram_url')) {
    /**
     * URL Instagram: field di Admin → Kontak, lalu config smj.instagram, lalu default.
     */
    function contact_instagram_url(): string
    {
        $contact = site_setting('contact', []);
        $url = trim((string) ($contact['instagram'] ?? ''));
        if ($url === '') {
            $url = trim((string) config('smj.instagram'));
        }

        return $url !== '' ? $url : 'https://www.instagram.com/smjtourtravel';
    }
}

if (! function_exists('site_setting')) {
    function site_setting(string $key, mixed $default = null): mixed
    {
        $cacheKey = 'site_setting:'.$key;

        $value = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($key) {
            return SiteSetting::query()->where('key', $key)->value('value');
        });

        if ($value === null) {
            return $default;
        }

        $decoded = json_decode($value, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $decoded;
        }

        return $value;
    }
}
