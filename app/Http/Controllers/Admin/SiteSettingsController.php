<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteSettingsController extends Controller
{
    public function edit(string $page)
    {
        $view = match ($page) {
            'home' => 'admin.settings.home',
            'pricelist' => 'admin.settings.pricelist',
            'tour-packages' => 'admin.settings.tour-packages',
            'drop-off' => 'admin.settings.drop-off',
            'contact' => 'admin.settings.contact',
            default => abort(404),
        };

        $settings = [
            'home' => site_setting('home', []),
            'pricelist' => site_setting('pricelist', []),
            'tour-packages' => site_setting('tour-packages', []),
            'drop-off' => site_setting('drop-off', []),
            'contact' => site_setting('contact', []),
        ];

        return view($view, [
            'page' => $page,
            'settings' => $settings[$page] ?? [],
        ]);
    }

    public function update(Request $request, string $page)
    {
        $payload = match ($page) {
            'home' => $request->validate([
                'cta_title' => 'nullable|string|max:255',
                'cta_subtitle' => 'nullable|string|max:255',
                'cta_button_text' => 'nullable|string|max:255',
            ]),
            'pricelist' => $request->validate([
                'badge' => 'nullable|string|max:255',
                'title' => 'nullable|string|max:255',
                'subtitle' => 'nullable|string|max:255',
            ]),
            'tour-packages' => $request->validate([
                'badge' => 'nullable|string|max:255',
                'title' => 'nullable|string|max:255',
                'subtitle' => 'nullable|string|max:255',
            ]),
            'drop-off' => $request->validate([
                'badge' => 'nullable|string|max:255',
                'title' => 'nullable|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'intro_text' => 'nullable|string',
                'button_text' => 'nullable|string|max:255',
            ]),
            'contact' => $request->validate([
                'whatsapp' => 'nullable|string|max:500',
                'email' => 'nullable|email|max:255',
                'address' => 'nullable|string|max:2000',
                'instagram' => 'nullable|string|max:500',
                'facebook' => 'nullable|string|max:500',
                'tiktok' => 'nullable|string|max:500',
                'linktree' => 'nullable|string|max:500',
                'tiket_url' => 'nullable|string|max:500',
                'maps_embed' => 'nullable|string',
            ]),
            default => abort(404),
        };

        SiteSetting::query()->updateOrCreate(
            ['key' => $page],
            ['value' => json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)]
        );

        Cache::forget('site_setting:'.$page);

        return redirect()->route('admin.settings.edit', $page)->with('success', 'Konten berhasil diperbarui.');
    }
}
