<?php

use App\Helpers\WhatsAppHelper;

if (!function_exists('whatsapp_booking_url')) {
    function whatsapp_booking_url(string $type, string $itemName, ?string $date = null): string
    {
        return WhatsAppHelper::bookingUrl($type, $itemName, $date);
    }
}

if (!function_exists('image_url')) {
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
